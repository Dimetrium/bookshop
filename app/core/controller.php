<?php

class Controller {
    /**
     * @var View holder of View Controller instance
     */
    protected $view;

    /**
     * Constructor
     *
     * Get instance of View Controller
     */
    function __construct()
    {

        $this->view = new View();

    }

    // the action caused the default
    function action_index()
    {
    }
}
