<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class HomeController
{
	public function index(RouteCollection $routes)
	{
		$data = 'Test';
        require_once APP_ROOT . '/views/index.php';
	}
}