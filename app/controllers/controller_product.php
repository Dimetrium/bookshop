<?php

class Controller_Product extends Controller
{

	function __construct()
	{
		$this->model = new Model_Product();
	}
	
	function action_index()
	{

        $data = $this->model->get_data();
		$this->view->generate('product_view.php', 'template_view.php', $data);
        $dbh = null;
	}
}
