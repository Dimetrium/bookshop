<?php

class Controller_Admin extends Controller
{
    public $model;
    function __construct()
    {
        $this->model = new Model_Admin();
        $this->view = new View();
    }

	function action_index()
	{
        session_start();
        $_SESSION['root'] = "123";

        if ( $_SESSION['root'] == "123" )
		{
            $data = $this->model->get_data();
			$this->view->generate('admin_view.php', 'admin_template_view.php', $data);
		}
		else
		{
            session_destroy();
			Router::ErrorPage404();
		}


	}
	
	// Действие для разлогинивания администратора
	function action_logout()
	{
		session_start();
		session_destroy();
		header('Location:/');
	}

    function action_add()
    {
        $this->view->generate('add_view.php', 'admin_template_view.php');
    }
    function action_edit()
    {
        $this->view->generate('edit_view.php', 'admin_template_view.php');
    }

    function action_users()
    {
        $this->view->generate('users_view.php', 'admin_template_view.php');

    }
}
