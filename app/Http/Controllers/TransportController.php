<?php namespace App\Http\Controllers;

use App\Http\Requests,
	App\Http\Controllers\Controller,
	App\Transport,
	Illuminate\Http\Request;

class TransportController extends Controller {

	/**
	 * Отображает события транспорта
	 *
	 * @return Response
	 */
	public function index()
	{
		$arTransport = Transport::orderBy('created_at', 'desc')->get();

		//Получим названия транспорта из их ID
		foreach ($arTransport as &$linkTransport)
			$linkTransport->name = Transport::$names[$linkTransport->name_id];

		
		return view('transport.index', [
			'arTransport' => $arTransport
		]);
	}


	/**
	 * Форма ручного добавления события транспорта
	 *
	 * @return Response
	 */
	public function form()
	{
		return view('transport.form', [
			'arNames' => Transport::$names
		]);
	}


	/**
	 * Процедура добавления события
	 *
	 * @return Response
	 */
	public function add(Request $request)
	{
		$this->validate(
			$request,
			[
				'name_id' => 'required|numeric',
				'number' => 'required',
				'direction' => 'required',
			],
			[
				'required' => 'Необходимо указать :attribute.',
			]
		);


		//Добавляем запись
		$transport = new Transport();
		$transport->name_id = $request->name_id;
		$transport->number = $request->number;
		$transport->direction = $request->direction;
		$transport->manual = '1';
		$transport->save();

		$transport->logSave();
	}
	
}