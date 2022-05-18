<form  method="get">
    @csrf
  	<div class="alert alert-border-gray">
  		<p><strong>Идентификационные данные</strong></p>
  		<div class="form-group row">
  			<div class="col-2">
  				<label for="email" class="mr-sm-2">№ контрагента:</label>
  			</div>
  			<div class="col-2">
  				<input type="email" readonly="" class="form-control mr-sm-2" id="email">
  			</div>
  			<div class="col-1">
  				<label for="email" class="mr-sm-2">№ 1С:</label>
  			</div>
  			<div class="col-2">
  				<input type="email" readonly class="form-control mr-sm-2" id="email">
  			</div>
  			<div class="col-1">
  				<label for="email" class="mr-sm-2">Группа:</label>
  			</div>
  			<div class="col-4">
  				<select class="form-control" id="sel1">
				    <option value="1">Банки</option>
				    <option value="2">Внутригрупповые</option>
				    <option value="3">Контрагенты (Поставщики и покупатели, займодавцы)</option>
				    <option value="4">Налоги и взносы</option>
				    <option value="5">Сотрудники</option>
				    <option value="6">Учредители</option>
			  	</select>
  			</div>

  		</div>
  		<div class="form-group row">
  			<div class="col-2">
  				<label for="email" class="mr-sm-2">Наименование:</label>
  			</div>
  			<div class="col-7">
  				<input type="email" class="form-control mr-sm-2" placeholder="Наименование" id="email">
  			</div>
  			<div class="col-1">
  				<label for="email" class="mr-sm-2">ОПФ:</label>
  			</div>
  			<div class="col-2">
  				<select class="form-control" id="sel1">
				    <option value="0">Выберите</option>
					<option value="1">Другая</option>
					<option value="2">ИП</option>
					<option value="3">ООО</option>
					<option value="4">ЗАО</option>
					<option value="5">ОАО</option>
					<option value="6">ПАО</option>
					<option value="7">АО</option>
					<option value="8">ФГУП</option>
					<option value="9">НП</option>
					<option value="10">АНО</option>
					<option value="11">ФГБОУ</option>
					<option value="12">ФГБУК</option>
					<option value="13">ФГБУ</option>
			  	</select>
  			</div>
  		</div>
  		<div class="form-group row">
  			<div class="col-2">
  				Сокр. наименование:
  			</div>
  			<div class="col-10">
  				<input type="email" class="form-control mr-sm-2" placeholder="Сокрашенное наименование" id="email">
  			</div>
  		</div>
    	<div class="form-group row">
  			<div class="col-2">
  				Полн. наименование:
  			</div>
  			<div class="col-10">
  				<input type="email" class="form-control mr-sm-2" placeholder="Полное наименование" id="email">
  			</div>
  		</div>

  		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" value=""> Д-ты по фин. безопасности
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" value="">Физ. Лицо
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" value="" disabled>Нерезидент
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" value="" disabled>Поставщик
			</label>
		</div>
		<div class="form-check-inline">
			<label class="form-check-label">
				<input type="checkbox" class="form-check-input" value="" disabled>Покупатель
			</label>
		</div>
  	</div>
  	<div class="alert alert-border-gray">
    	<p><strong>Контакты</strong></p>
    	<div class="form-group row">
  			<div class="col-6">
  				<label for="uaddress">Юридический адрес:</label>
  				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
  			<div class="col-6">
  				<label for="uaddress">Фактический адрес:</label>
  				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  			</div>
  		</div>
  		<div class="form-group row">
  			<div class="col-2">
  				Телефон:
  			</div>
  			<div class="col-2">
  				<input type="email" class="form-control mr-sm-2"  id="email">
  			</div>
  		</div>
  		<p><strong>Информация о лице, подписывающем договора</strong></p>
  		<div class="form-group row">
  			<div class="col-3">
  				ФИО в именительном падеже:
  			</div>
  			<div class="col-3">
  				<input type="email" class="form-control mr-sm-2" placeholder="Полное наименование" id="email">
  			</div>
  			<div class="col-3">
  				ФИО в родительном падеже:
  			</div>
  			<div class="col-3">
  				<input type="email" class="form-control mr-sm-2" placeholder="Полное наименование" id="email">
  			</div>
  		</div>
  		<div class="form-group row">
  			<div class="col-3">
  				Должность в именительном падеже:
  			</div>
  			<div class="col-3">
  				<input type="email" class="form-control mr-sm-2" placeholder="Полное наименование" id="email">
  			</div>
  			<div class="col-3">
  				Должность в родительном падеже:
  			</div>
  			<div class="col-3">
  				<input type="email" class="form-control mr-sm-2" placeholder="Полное наименование" id="email">
  			</div>
  		</div>
  		<div class="form-group row">
  			<div class="col-4">
  				Документ-основание в родительном падеже:
  			</div>
  			<div class="col-5">
  				<input type="email" class="form-control mr-sm-2" placeholder="Полное наименование" id="email">
  			</div>
  		</div>

  	</div>
  	<div class="alert alert-border-gray">
    	<p><strong>Банковские реквизиты</strong></p>
  	</div>
</form>