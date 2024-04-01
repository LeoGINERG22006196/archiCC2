<?php

namespace domaine;

class Utilisateur
{
	protected $nom;
	protected $email;
	protected $mdp;

	/**
	 * @param $nom
	 * @param $email
	 * @param $mdp
	 */
	public function __construct($nom, $email, $mdp)
	{
		$this->nom = $nom;
		$this->email = $email;
		$this->mdp = $mdp;
	}

	/**
	 * @return mixed
	 */
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * @return mixed
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * @return mixed
	 */
	public function getMdp()
	{
		return $this->mdp;
	}
}