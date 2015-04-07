<?php
spl_autoload_register( function ( $class )
        {
            include __DIR__ . '/core/' . strtolower($class) . '.php';

        });

/**
 * Closure for providing lazy initialization of DB connection.
 *
 * @return PDO

$dbh = function() {
    $instance = new PDO ( PDO_DSN, PDO_USER, PDO_PASSWORD );
    $instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $instance->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $instance;
};
*/

Router::start();
