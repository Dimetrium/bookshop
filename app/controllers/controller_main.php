<?php
/**
 * class "Controller_Main"
 * Generate Main page
 */
class Controller_Main extends Controller
{
    /**
     * Constructor
     *
     * Get instance of Main Model and View Controller
     */
    function __construct ()
    {
        parent::__construct();
        $this->model = new Model_Main();
    }

    /**
     * Action Index
     *
     * Generate HTML View
     * @throws Exception
     * @return mixed
     */
    function action_index ()
    {
        /**
         * @return array
         */
        $data = $this->model->get_data();

        /**
         * Generate html view
         *
         * @param 'main_view.php'
         * @param 'template_view.php'
         * @param $data array
         */
        if ( is_array( $data ) ) {
            return $this->view->generate( 'main_view.php', 'template_view.php', $data );
        } else {
            throw new Exception( 'Method "generate" expected array.' );
        }
    }

}