@extends('layouts.app')


@section('content')

<h1>Отслеживание транспорта</h1>

<div class="transportWrap">
	<table id="table-transport" class="table table-pointer">
		<tr>
			<th>Наименование</th>
			<th>Номер</th>
			<th>Направление</th>
			<th>Дата / время</th>
		</tr>

		@foreach ($arTransport as $transport)
			<tr>
				<td>{{ $transport->name }}</td>
				<td>{{ $transport->number }}</td>
				<td>{{ $transport->direction }}</td>
				<td>{{ $transport->created_at }}</td>
			</tr>
		@endforeach
	</table>
</div>

@endsection