@extends('layouts.app')


@section('content')

<h1>Добавление события транспорта</h1>

<form method="POST" id="addEvent">

	<div class="input-group">
		<span class="input-group-addon">Наименование</span>
		<select name="name_id" class="form-control">
			@foreach ($arNames as $id => $name)
				<option value="{{$id}}">{{$name}}</option>
			@endforeach
		</select>
	</div>

	<div class="input-group">
		<span class="input-group-addon">Номер</span>
		<input name="number" type="text" class="form-control" placeholder="Номер транспорта">
	</div>

	<div class="input-group">
		<span class="input-group-addon">Направление</span>
		<input name="direction" type="text" class="form-control" placeholder="Направление транспорта">
	</div>

	<div class="input-group">
		<button class="form-control" type="submit">Добавить</button>
	</div>

</form>

@endsection