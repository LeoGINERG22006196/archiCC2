<?php

namespace domaine;

class Menu
{
	protected $nomMenu;
	protected $listePlat;
	protected $nomClient;
	protected $dateMiseAJour;
	protected $prix;

	/**
	 * @param $nomMenu
	 * @param $listePlat
	 * @param $nomClient
	 * @param $dateMiseAJour
	 * @param $prix
	 */
	public function __construct($nomMenu, $listePlat, $nomClient, $dateMiseAJour, $prix)
	{
		$this->nomMenu = $nomMenu;
		$this->listePlat = $listePlat;
		$this->nomClient = $nomClient;
		$this->dateMiseAJour = $dateMiseAJour;
		$this->prix = $prix;
	}

	/**
	 * @return mixed
	 */
	public function getNomMenu()
	{
		return $this->nomMenu;
	}

	/**
	 * @return mixed
	 */
	public function getListePlat()
	{
		return $this->listePlat;
	}

	/**
	 * @return mixed
	 */
	public function getNomClient()
	{
		return $this->nomClient;
	}

	/**
	 * @return mixed
	 */
	public function getDateMiseAJour()
	{
		return $this->dateMiseAJour;
	}

	/**
	 * @return mixed
	 */
	public function getPrix()
	{
		return $this->prix;
	}



}