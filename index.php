<?php

include_once 'control/Controller.php';
include_once 'control/Presenter.php';

include_once 'gui/Vue.php';
include_once 'gui/VueConnexion.php';
include_once 'gui/VueMenu.php';
include_once 'gui/VuePlat.php';

use control\{Controller, Presenter};
use gui\{VueConnexion, VueMenu, VuePlat, Vue};

$controller = new Controller();
$presenter = new Presenter();

// chemin de l'URL demandée au navigateur
// (p.ex. /annonces/index.php)
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


// définition d'une session d'une heure
ini_set('session.gc_maxlifetime', 3600);
session_set_cookie_params(3600);
session_start();


if ('/restaurant/' == $uri || '/restaurant/index.php' == $uri){
	//page de connexion
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page connexion</h1></body></html>';
}
elseif ('/restaurant/index.php/commande' == $uri){
	//page de commande
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page commande</h1></body></html>';
}
elseif ('/restaurant/index.php/menu' == $uri){
	//page de menu
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page menu</h1></body></html>';
}
elseif ('/restaurant/index.php/plat' == $uri){
	//page de plat
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page plat</h1></body></html>';
}
else {
	header('Status: 404 Not Found');
	echo '<html><body><h1>Page introuvable</h1></body></html>';
}
