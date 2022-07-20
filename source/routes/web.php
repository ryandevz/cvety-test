<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('home', new Route('/', array('controller' => 'HomeController', 'method'=>'index')));
$routes->add('form_store', new Route('/api/form/store', array('controller' => 'HomeController', 'method'=>'store')));

$routes->add('mylocation', new Route('/api/mylocation', array('controller' => 'LocationController', 'method'=>'index')));
$routes->add('getlocation', new Route('/api/getlocation', array('controller' => 'LocationController', 'method'=>'getLocation')));