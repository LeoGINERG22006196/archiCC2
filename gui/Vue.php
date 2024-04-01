<?php

class Vue
{
	protected $titre = '';
	protected $contenu = '';
	protected $page;

	public function __construct($page)
	{
		$this->page = $page;
	}

	public function display()
	{
		$this->page->display( $this->titre, $this->contenu );
	}
}