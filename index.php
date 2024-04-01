<?php

include_once 'control/Controller.php';
include_once 'control/Presenter.php';

include_once 'gui/Vue.php';
include_once 'gui/Page.php';
include_once 'gui/VueConnexion.php';
include_once 'gui/VueMenu.php';
include_once 'gui/VuePlat.php';

use control\{Controller, Presenter};

$controller = new Controller();
$presenter = new Presenter();

// chemin de l'URL demandée au navigateur
// (p.ex. /annonces/index.php)
$uri = '/restaurant/'; // j'arrive pas a faire fonctionner le "parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);"
echo $uri;

// définition d'une session d'une heure
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();


if ('/restaurant/' == $uri || '/restaurant/index.php' == $uri){
	//page de connexion
	$page = new Page("gui/Page.html");
	$vueConnexion = new VueConnexion($page);

	$vueConnexion->display();
}
elseif ('/restaurant/index.php/menu' == $uri){
	//page de menu
	$page = new Page("gui/Page.html");
	$vueMenu = new VueMenu($page);

	$vueMenu->display();
}
elseif ('/restaurant/index.php/plat' == $uri){
	//page de plat
	$page = new Page("gui/Page.html");
	$vuePlat = new VueConnexion($page);

	$vuePlat->display();
}
else {
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page introuvable</h1></body></html>';
}
