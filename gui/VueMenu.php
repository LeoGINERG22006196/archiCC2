<?php

class VueMenu extends Vue
{
	public function __construct($page)
	{
		parent::__construct($page);

		$this->titre= 'Menu';

		$this->contenu = '';


	}
}