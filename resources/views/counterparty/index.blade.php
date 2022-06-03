@extends('layouts.app')

@section('content')

<div class="container-fluid p-2 bg-secondary text-white">
    <i class="material-icons openModal" title="{{ __('msg.create_new_counterparty') }}" data-link="{{ route('counterparty.form') }}" style="cursor:pointer;color:#fdf001">&#xe146;</i>
</div>

<div class="main_container">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="h3">Контрагенты</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead class="thead-yellow">
                        <tr>
                          <th>...</th>
                          <th>№</th>
                          <th>Наименование</th>
                          <th>ИНН</th>
                          <th>КПП</th>
                          <th>Статус</th>
                        </tr>
                      </thead>
                      <tbody class="tbody-white">
                         @foreach ($counterparties as $counterparty)
                         <tr>
                            <td>
                                <i class="material-icons openModal"  title="Редактировать" style="color:green;cursor:pointer;" data-id="{{ $counterparty->counterparty_id }}" data-link="{{ route('counterparty.form') }}">&#xe3c9;</i>
                                <i class="material-icons Delete" title="Удалить" style="color:red;cursor:pointer;" data-id="{{ $counterparty->counterparty_id }}" data-link="{{ route('counterparty.delete') }}">&#xe872;</i>
                            </td>
                            <td>{{$counterparty->counterparty_id}}</td>
                            <td><a href="javascript:void(0)" data-id="{{ $counterparty->counterparty_id }}" data-link="{{ route('counterparty.form') }}" class="openModal">{{$counterparty->name}}</td>
                            <td>{{ $counterparty->inn }}</td>
                            <td>{{ $counterparty->kpp }}</td>
                            <td></td>
                         </tr>
                         @endforeach
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="Modal" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog modal-xl">
        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-header">
              <h5 class="modal-title">Информaция о контрагенте</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form id="form" novalidate="novalidate">

            <div class="modal-body">
              <p>Поля с звездочкой <span style="color:red;">*</span> обязательны для заполнения.</p>
              <div id='modalContent'></div>
            </div>
            <div class="modal-footer">
              <button id="submit" class="btn btn-primary">Сохранить</button>
              <button type="button" class="btn btn-default" data-bs-dismiss="modal">Закрыть</button>
            </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: "{{ route('counterparty.store') }}",
            type: "POST",
            data:$(this).serialize(),
            dataType:"json",
            success:function(data){
                if(data.errors) {
                    $.each(data.errors, function(index, value) {
                        $('#'+index).addClass('is-invalid');
                        //console.log(index+' '+value);
                    });
                }
                if(data.success) {
                    $('#Modal').modal('hide');
                    location.reload();
                }
            }
        });
    });
</script>
@endsection
