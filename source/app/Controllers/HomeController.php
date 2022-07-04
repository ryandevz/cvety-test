<?php 

namespace App\Controllers;


use App\Models\Form;
use Symfony\Component\Routing\RouteCollection;

class HomeController
{
	public function index(RouteCollection $routes)
	{
		$form = new Form();
        $form->getForm();

		$data = 'Test';
        require_once APP_ROOT . '/views/index.php';
	}

	public function store(RouteCollection $routes) 
    {
        /* Validate */
        $data = array();
        if( isset($_POST['email']) ) {
            $email = $_POST['email'];
        } else {
            $data['email'] = "email required";
        }

        if( isset($_POST['phone']) ) {
            $phone = $_POST['phone'];
        } else {
            $data['phone'] = "phone required";
        }

        if( isset($_POST['message']) ) {
            $message = $_POST['message'];
        } else {
            $data['message'] = "message required";
        }

        $json = json_encode($data, JSON_PRETTY_PRINT);

        header("Content-type: application/json");
        echo $json;
    }
}