<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$routes = new RouteCollection();
$routes->add('home', new Route('/', array('controller' => 'HomeController', 'method'=>'index')));
$routes->add('location', new Route('/api/location', array('controller' => 'LocationController', 'method'=>'index')));