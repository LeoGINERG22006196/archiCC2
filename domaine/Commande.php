<?php

namespace domaine;

class Commande
{
	protected $id;
	protected $listeMenu;
	protected $dateCommande;
	protected $prixTotal;
	protected $adresseDeLivraison;
	protected $dateDeLivraison;

	/**
	 * @param $id
	 * @param $listeMenu
	 * @param $dateCommande
	 * @param $prixTotal
	 * @param $adresseDeLivraison
	 * @param $dateDeLivraison
	 */
	public function __construct($id, $listeMenu, $dateCommande, $prixTotal, $adresseDeLivraison, $dateDeLivraison)
	{
		$this->id = $id;
		$this->listeMenu = $listeMenu;
		$this->dateCommande = $dateCommande;
		$this->prixTotal = $prixTotal;
		$this->adresseDeLivraison = $adresseDeLivraison;
		$this->dateDeLivraison = $dateDeLivraison;
	}

	/**
	 * @return mixed
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @return mixed
	 */
	public function getListeMenu()
	{
		return $this->listeMenu;
	}

	/**
	 * @return mixed
	 */
	public function getDateCommande()
	{
		return $this->dateCommande;
	}

	/**
	 * @return mixed
	 */
	public function getPrixTotal()
	{
		return $this->prixTotal;
	}

	/**
	 * @return mixed
	 */
	public function getAdresseDeLivraison()
	{
		return $this->adresseDeLivraison;
	}

	/**
	 * @return mixed
	 */
	public function getDateDeLivraison()
	{
		return $this->dateDeLivraison;
	}



}