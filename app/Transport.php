<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    public static $names = [
    	1 => 'Автобус',
    	2 => 'Троллейбус',
    	3 => 'Трамвай',
    ];


    //Время, после которого удаляются записи (в секундах)
    private $timeDelete = 60 * 2;


    private static $arDirections = [
    	'Нефтяная дорога',
    	'Бармалеева улица',
    	'Дорога на Турухтанные острова',
    	'Зверинская улица',
    	'Опытная улица',
    	'Детская улица',
    	'Прямой проспект',
    	'Счастливая улица',
    	'Рядовая улица',
    	'Улица 2-й луч',
    ];


    public function saveRandom()
    {
    	//Случайный транспорт
    	$name_id = array_rand(self::$names);


    	//Случайный номер
    	$number = rand(1, 100);


    	//Случайное направление
    	$r = array_rand(self::$arDirections);
    	$direction = self::$arDirections[$r];


    	$this->name_id = $name_id;
        $this->number = $number;
        $this->direction = $direction;
        $this->manual = '0';
        $this->save();

        $this->logSave();
        

        $timeDelete = time() - $this->timeDelete;
        self::where('manual', '!=', '1')->where('created_at', '<', date('Y-m-d H:i:s', $timeDelete))->delete();
    }


    /**
     * Логирование
     */
    public function logSave()
    {
    	$fileName = date('d.m.Y', time());
    	file_put_contents(base_path()."/logTransport/{$fileName}.log", print_r($this->attributes, true), FILE_APPEND);
    }
}
