<?php

class Model
{
    protected $dbh;

    public function __construct()
    {
        $this->dbh = DBConnect::getInstance();

    }

    // метод выборки данных
    public function get_data()
    {
        // todo
    }
}