<?php

namespace domaine;

class Plat
{
	protected $nomPlat;
	protected $prix;

	/**
	 * @param $nomPlat
	 * @param $prix
	 */
	public function __construct($nomPlat, $prix)
	{
		$this->nomPlat = $nomPlat;
		$this->prix = $prix;
	}

	/**
	 * @return mixed
	 */
	public function getNomPlat()
	{
		return $this->nomPlat;
	}

	/**
	 * @return mixed
	 */
	public function getPrix()
	{
		return $this->prix;
	}


}