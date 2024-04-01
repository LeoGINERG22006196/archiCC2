<?php

class VueConnexion extends Vue
{

	public function __construct($page)
	{
		parent::__construct($page);

		$this->titre= 'Connexion';

		$this->contenu = '<h1>PageConnexion</h1>';


	}
}