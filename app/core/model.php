<?php

class Model
{
    /**
     * @var DBConnect instance holder
     */
    protected $dbh;

    /**
     * Constructor
     * Get instance of DBConnect class
     */
    public function __construct ()
    {

        $this->dbh = DBConnect::getInstance();

    }

    // get data method
    public function get_data ()
    {
    }
}