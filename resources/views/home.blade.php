@extends('layouts.app')

@section('content')

<div class="container-fluid p-2 bg-secondary text-white">
    <i class="material-icons openModal" title="{{ __('msg.create_new_counterparty') }}" data-link="/backend/counterparty/form" style="cursor:pointer;color:#fdf001">&#xe146;</i>
</div>

<div class="main_container">
    <div class="container-fluid">

        <div class="row">


        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <p class="h3">Контрагенты</p>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                      <thead class="thead-light">
                        <tr>
                          <th>...</th>
                          <th>№</th>
                          <th>Куратор</th>
                          <th>Наименование</th>
                          <th>Группа</th>
                          <th>ИНН</th>
                          <th>КПП</th>
                          <th>Статус</th>
                        </tr>
                      </thead>
                      <tbody class="tbody-white">
                       <!-- <tr>
                          <td>
                            <i class="material-icons" title="Редактировать" style="color:green;cursor:pointer;">&#xe3c9;</i>
                            <i class="material-icons" title="Отклонить" style="color:gray;cursor:pointer;">&#xe5c9;</i>
                            <i class="material-icons" title="Удалить" style="color:red;cursor:pointer;">&#xe872;</i>
                          </td>
                          <td>1</td>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <td><i class="material-icons" style="font-size:24px;color:#333;">edit</i></td>
                          <td>2</td>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>Otto</td>
                        </tr>
                        <tr>
                          <td><i class="material-icons" style="font-size:24px;color:#333;">edit</i></td>
                          <td>3</td>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                          <td>Otto</td>
                        </tr>-->
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
                <button type="button" class="close closefirstmodal">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <p>Поля с звездочкой <span style="color:red;">*</span> обязательны для заполнения.</p>
              <div id='modalContent'></div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn btn-default closefirstmodal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="Warning" class="modal fade" role="dialog" data-backdrop="false">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-body" style="background-color:#e7e7e7;">
                <p>Вы хотите сохранить данные?</p>
                <button type="button" class="btn btn-danger confirmclosed">Да</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Нет</button>
            </div>
        </div>
    </div>
</div>

<?php /*
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
*/?>

@endsection
