<?php

//Отслеживание транспорта
Route::get('/', 'TransportController@index');


//Ручное добавление события транспорта
Route::get('/add', 'TransportController@form');


//Процедура добавления
Route::post('/add', 'TransportController@add');


//Описание проекта
Route::get('/about', function () {
	return view('transport.about');
});