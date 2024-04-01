<?php

class VueConnexion extends Vue
{

	public function __construct($page)
	{
		parent::__construct($page);

		$this->titre= 'Connexion';

		$this->contenu = '
            <form method="post" action="/annonces/index.php/annonces">
                <label for="login"> Votre identifiant </label> :
                <input type="text" name="login" id="login" placeholder="defaut" maxlength="12" required />
                <br />
                <label for="password"> Votre mot de passe </label> :
                <input type="password" name="password" id="password" maxlength="12" required />
        
                <input type="submit" value="Envoyer">
            </form>
            <a href="/annonces/index.php/inscription">Inscription</a>';


	}
}