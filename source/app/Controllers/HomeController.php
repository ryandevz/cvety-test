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
        
        require_once APP_ROOT . '/views/index.php';
	}

	public function store(RouteCollection $routes) 
    {
        header("Content-type: application/json");

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

        if (isset($_POST['email'], $_POST['phone'], $_POST['message'])) {
            $form = new Form();
            $form->setForm($_POST['email'], $_POST['phone'], $_POST['message']);

            if($form->status = 'inserted') {
                $json = json_encode($form, JSON_PRETTY_PRINT);
                echo $json;
            } elseif ($form->status = 'error') {
                $json = json_encode($form, JSON_PRETTY_PRINT);
                echo $json;
            }
        }

        $json = json_encode($data, JSON_PRETTY_PRINT);
        echo $json;
    }
}