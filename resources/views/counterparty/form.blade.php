    @csrf
  	<div class="alert alert-border-gray">
  		<p><strong>Идентификационные данные</strong></p>
  		<div class="row mb-2">
  			<div class="col-2">
  				<label for="id" class="mt-2">№ контрагента:</label>
  			</div>
  			<div class="col-2">
  				<input type="text" readonly="" class="form-control" name="id" id="id" value="{{ $counterparty->id }}">
  			</div>
  			<div class="col-1">
  				<label for="1c" class="mt-2">№ 1С:</label>
  			</div>
  			<div class="col-2">
  				<input type="text" readonly class="form-control" name="1c_id" id="1c_id">
  			</div>
  			<div class="col-1">
                <span class="required">*</span>&nbsp;
  				<label for="group" class="mt-2">Группа:</label>
  			</div>
  			<div class="col-4">
  				<select class="form-control" id="group_id" name="group_id" required >
				    <option value="">Выберите</option>
                    <option value="1" {{ $counterparty->group_id==1 ? 'selected':'' }}>Банки</option>
				    <option value="2" {{ $counterparty->group_id==2 ? 'selected':'' }}>Внутригрупповые</option>
				    <option value="3" {{ $counterparty->group_id==3 ? 'selected':'' }}>Контрагенты (Поставщики и покупатели, займодавцы)</option>
				    <option value="4" {{ $counterparty->group_id==4 ? 'selected':'' }}>Налоги и взносы</option>
				    <option value="5" {{ $counterparty->group_id==5 ? 'selected':'' }}>Сотрудники</option>
				    <option value="6" {{ $counterparty->group_id==6 ? 'selected':'' }}>Учредители</option>
			  	</select>
                <div class="invalid-feedback">Выберите группу</div>
  			</div>
  		</div>

  		<div class="row mb-2">
  			<div class="col-2">
                <span class="required">*</span>&nbsp;
  				<label for="name" class="mt-2">Наименование:</label>
  			</div>
  			<div class="col-7">
  				<input type="text" class="form-control mt-1" placeholder="Наименование" id="name" name="name" value="{{ $counterparty->name }}" required>
                <div class="invalid-feedback">Заполните наименование</div>
  			</div>
  			<div class="col-1">
                <span class="required">*</span>&nbsp;
  				<label for="opf_id" class="mt-2">ОПФ:</label>
  			</div>
  			<div class="col-2">
  				<select class="form-control" id="opf_id" name="opf_id" required>
				    <option value="">Выберите</option>
					<option value="1" {{ $counterparty->opf_id==1 ? 'selected':'' }}>Другая</option>
					<option value="2" {{ $counterparty->opf_id==2 ? 'selected':'' }}>ИП</option>
					<option value="3" {{ $counterparty->opf_id==3 ? 'selected':'' }}>ООО</option>
					<option value="4" {{ $counterparty->opf_id==4 ? 'selected':'' }}>ЗАО</option>
					<option value="5" {{ $counterparty->opf_id==5 ? 'selected':'' }}>ОАО</option>
					<option value="6" {{ $counterparty->opf_id==6 ? 'selected':'' }}>ПАО</option>
					<option value="7" {{ $counterparty->opf_id==7 ? 'selected':'' }}>АО</option>
					<option value="8" {{ $counterparty->opf_id==8 ? 'selected':'' }}>ФГУП</option>
					<option value="9" {{ $counterparty->opf_id==9 ? 'selected':'' }}>НП</option>
					<option value="10" {{ $counterparty->opf_id==10 ? 'selected':'' }}>АНО</option>
					<option value="11" {{ $counterparty->opf_id==11 ? 'selected':'' }}>ФГБОУ</option>
					<option value="12" {{ $counterparty->opf_id==12 ? 'selected':'' }}>ФГБУК</option>
					<option value="13" {{ $counterparty->opf_id==13 ? 'selected':'' }}>ФГБУ</option>
			  	</select>
                <div class="invalid-feedback">Выберите ОПФ</div>
  			</div>
  		</div>
  		<div class="row mb-2">
  			<div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="short_name" class="mt-2">Сокр. наименование:</label>
  			</div>
  			<div class="col-10">
  				<input type="text" class="form-control" placeholder="Сокрашенное наименование" id="short_name" name="short_name" value="{{ $counterparty->short_name }}" required>
                <div class="invalid-feedback">Заполните сокрашенное наименование</div>
  			</div>
  		</div>
    	<div class="row mb-2">
  			<div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="full_name" class="mt-2">Полн. наименование:</label>
  			</div>
  			<div class="col-10">
  				<input type="text" class="form-control" placeholder="Полное наименование" id="full_name" name="full_name" value="{{ $counterparty->full_name }}" required>
                <div class="invalid-feedback">Заполните полное наименование</div>
  			</div>
  		</div>
        <div class="row mb-2">
            <div class="col-1"></div>
            <div class="col-1">
                <span class="required">*</span>&nbsp;
                <label for="inn" class="mt-2">ИНН:</label>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="ИНН" id="inn" name="inn" value="{{ $counterparty->inn }}" required>
                <div class="invalid-feedback">Заполните ИНН</div>
            </div>
            <div class="col-1">
                <span class="required">*</span>&nbsp;
                <label for="inn" class="mt-2">КПП:</label>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="КПП" id="kpp" name="kpp" value="{{ $counterparty->kpp }}" required>
                <div class="invalid-feedback">Заполните КПП</div>
            </div>
            <div class="col-1">
                <span class="required">*</span>&nbsp;
                <label for="inn" class="mt-2">ОКПО:</label>
            </div>
            <div class="col-2">
                <input type="text" class="form-control" placeholder="ОКПО" id="code_okpo" name="code_okpo" value="{{ $counterparty->code_okpo }}" required>
                <div class="invalid-feedback">Заполните ОКПО</div>
            </div>
        </div>
  		<div class="form-check form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" id="is_security_document" name="is_security_document" {{ $counterparty->is_security_document? 'checked':'' }}> Д-ты по фин. безопасности
			</label>
		</div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" id="is_physical_face" name="is_physical_face" {{ $counterparty->is_physical_face? 'checked':'' }}>Физ. Лицо
			</label>
		</div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" id="is_non_resident" name="is_non_resident" {{ $counterparty->is_non_resident? 'checked':'' }}>Нерезидент
			</label>
		</div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" id="is_supplier" name="is_supplier" {{ $counterparty->is_supplier? 'checked':'' }}>Поставщик
			</label>
		</div>
		<div class="form-check form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" id='is_buyer' name="is_buyer" {{ $counterparty->is_buyer? 'checked':'' }}>Покупатель
			</label>
		</div>
  	</div>
    <div class="alert alert-border-gray">
    	<p><strong>Банковские реквизиты</strong></p>
        <div class="row mb-2">
            <div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="bik" class="mt-2">БИК:</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="БИК" id="bik" name="bik" required value="{{ $bank->bik }}">
                <div class="invalid-feedback">Заполните БИК</div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="bank_name" class="mt-2">Наим. банка:</label>
            </div>
            <div class="col-10">
                <input type="text" class="form-control" placeholder="Наименование банка" id="bank_name" name="bank_name" value="{{ $bank->bank_name }}" required>
                <div class="invalid-feedback">Заполните наименование банка</div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="correspondent_account" class="mt-2">Корр. Счет:</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Корр. Счет" id="correspondent_account" name="correspondent_account" required value="{{ $bank->correspondent_account }}">
                <div class="invalid-feedback">Заполните корр. счет </div>
            </div>
            <div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="checking_account" class="mt-2">Расчетный cчет:</label>
            </div>
            <div class="col-4">
                <input type="text" class="form-control" placeholder="Расчетный счет" id="checking_account" name="checking_account" required value="{{ $bank->checking_account }}">
                <div class="invalid-feedback">Заполните расчетный счет </div>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="account_type" class="mt-2">Вид счета:</label>
            </div>
            <div class="col-4">
                <select name="account_type" class="form-control"  id="account_type" required>
                    <option value="" selected="">---------</option>
                    <option value="1" {{ $bank->account_type == 1?'selected':'' }}>Расчетный</option>
                    <option value="2" {{ $bank->account_type == 2?'selected':'' }}>Депозитный</option>
                    <option value="3" {{ $bank->account_type == 3?'selected':'' }}>Ссудный</option>
                    <option value="4" {{ $bank->account_type == 4?'selected':'' }}>Аккредитивный</option>
                    <option value="5" {{ $bank->account_type == 5?'selected':'' }}>Иной</option>
                </select>
                <div class="invalid-feedback">Выберите вид счета</div>
            </div>
            <div class="col-2">
                <span class="required">*</span>&nbsp;
                <label for="current_id" class="mt-2">Валюта счета:</label>
            </div>
            <div class="col-4">
                <select name="current_id" class="form-control" id="current_id" required>
                    <option value="" selected="">---------</option>
                    <option value="1" {{ $bank->account_type == 1?'selected':'' }}>RUB</option>
                    <option value="2" {{ $bank->account_type == 2?'selected':'' }}>USD</option>
                    <option value="3" {{ $bank->account_type == 3?'selected':'' }}>EUR</option>
                    <option value="4" {{ $bank->account_type == 4?'selected':'' }}>KZT</option>
                    <option value="5" {{ $bank->account_type == 5?'selected':'' }}>CNY</option>
                    <option value="6" {{ $bank->account_type == 6?'selected':'' }}>GBP</option>
                </select>
                <div class="invalid-feedback">Выберите валюту </div>
            </div>
            <input type="hidden" name="bank_id" value="{{ $bank->id }}">
        </div>
  	</div>
<script type="text/javascript">
$(document).ready(function () {
    $('form').find('input,select').change(function(){
        if($(this).prop('required')){
            if($(this).val()){
                $(this).next().hide();
                $(this).removeClass('is-invalid');
            }else{
                $(this).next().show();
                $(this).addClass('is-invalid');
            }
        }
    });
});
</script>
