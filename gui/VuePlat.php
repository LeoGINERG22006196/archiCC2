<?php

class VuePlat extends Vue
{
	public function __construct($page)
	{
		parent::__construct($page);

		$this->titre= 'Plat';

		$this->contenu = '<h1>Page Plat</h1>';


	}
}