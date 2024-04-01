<?php

class Page
{
	protected $templateFile;

	public function __construct( $templateFile )
	{
		$this->templateFile = $templateFile;
	}

	public function display( $titre, $contenu )
	{
		$page = file_get_contents( $this->templateFile );
		$page = str_replace( ['%titre%','%contenu%'], [$titre,$contenu], $page);
		echo $page;
	}
}