<?php
// подключаем файлы ядра
//require_once 'core/model.php';
//require_once 'core/view.php';
//require_once 'core/controller.php';
spl_autoload_register( function ( $class )
        {
            include 'core/' . $class . '.php';

        });

/*
Здесь обычно подключаются дополнительные модули, реализующие различный функционал:
	> аутентификацию
	> кеширование
	> работу с формами
	> абстракции для доступа к данным
	> ORM
	> Unit тестирование
	> Benchmarking
	> Работу с изображениями
	> Backup
	> и др.
*/
Router::start(); // запускаем маршрутизатор