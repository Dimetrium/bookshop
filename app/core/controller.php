<?php

class Controller {

    public $view;
    protected $dbh;

    function __construct()
    {

        $this->view = new View();

    }

    // действие (action), вызываемое по умолчанию
    function action_index()
    {
        // todo
    }
}
