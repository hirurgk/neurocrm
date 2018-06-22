@extends('layouts.app')


@section('content')

<h1>О проекте</h1>

<h2>Сервер (Развёрнут с нуля на VDS)</h2>
<p>
	<b>ОС: </b> Ubuntu 18.04<br>
	<b>ПО:</b> Nginx 1.14.0 + PHP-FPM 7.2 + MySQL 5.7.22<br>
	<b>Фреймворк: </b> Laravel 5.6
</p>

<h2>Архитектура</h2>
<p>
	<b>Миграции: </b> /var/www/html/database/migrations/<br>
	<b>Маршруты: </b> /var/www/html/routes/web.php<br>
	<b>Модель: </b> /var/www/html/app/Transport.php<br>
	<b>Контроллер: </b> /var/www/html/app/Http/Controllers/TransportController.php<br>
	<b>Отображения: </b> /var/www/html/resources/views/<br>
	<b>JavaScript: </b> /var/www/html/public/js/transport.js<br>
	<b>Скрипт (вместо Cron) на каждые 7 секунд: </b> /etc/init.d/cronTransport<br>
	<b>phpMyAdmin для удобства: </b> <a href="/pma/" target="_blank">/pma/</a><br>
	<b>Логирование записей: </b> /var/www/html/logTransport/
</p>

@endsection