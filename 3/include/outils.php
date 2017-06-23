<?php

			/* -------------------- FONCTION MENU() ------------------ */

  function Menu()
  /**
  *\author Hugo Lausenaz-Pire
  *\verificator Joseph Tabailloux
  *\brief affiche le menu selon certaines conditions
  * elle n'a pas de paramaètres
  *\return un string $menu qu'il faudra afficher.
  * (conseil hugo)Pour afficher le menu: echo Menu(), la fonction ne marche pas
  *si on n'a pas la fonction estConnecte()
  */
  {
    $menu = "";/* Déclaration de ma variable menu string  */

		$menu .= '<div id="logo">
							<img src="image/logo.png"width="60%">
							</div>';
    $menu .= '<nav id="nav">
                <ul>
                  <li><a href ="index.php">Accueil</a></li>
                  <li><a href ="listelivre.php">Livres</a></li>';
    if (estConnecte())
		{          /* Je concatène le début d'une liste à puce */
		    if (!estAdmin()) /* Si la fonction estAdmin n'est pas vraie alors: */
		    {
		      $menu .= '<li><a href="ficheutilisateur.php?id='. $_SESSION['code'] .'">Profil</a></li>';
		                /* Comme l'utilisateur est connecté je concatene $menu avec une nouvelle puce "Profil" */
		    }
				 if (estAdmin()) /* Si la fonction estAdmin renvoie vrai alors: */
				{
					$menu .= '<li><a href="ficheutilisateur.php?id='. $_SESSION['code'] .'">Administrateur</a></li>';
										/* Comme l'utilisateur est connecté je concatene $menu avec une nouvelle puce "Administrateur" */
				}
		}
      $menu .='<li><a href="about.php">A propos</a></li></ul></nav>';
    /* Je concatène $menu pour fermer la liste à puce et je ferme la balise nav */
    return $menu; /* Je renvoit $menu le menu donc. */
  }

	/* -------------------- FONCTION PIED PAGE() ------------------ */

	function piedPage()
	/**
	*\author Hugo Lausenaz-Pire
	*\verificator Joseph Tabailloux
	*\brief renvoie une valeur qui contient le bas de la page
	* elle n'a pas de paramaètres
	*\return un string $piedpage qu'il faudra afficher.
	*/
	{
		if (estConnecte()){
			if (!estAdmin()) /* Si la fonction estAdmin n'est pas vraie alors: */
			{
			$piedPage = '<footer> <div class="bot"><li><a href="index.php">Accueil - </a></li><li><a href="listelivre.php"> Liste - </a></li><li><a href="about.php"> A propos - </a></li><li><a href="ficheutilisateur.php?id='. $_SESSION['code'] . '"> Profil</a></li></div> <p> Site réalisé par les B1 EPSI Grenoble, 2016-2017 <a href="#"CGU</a></p><div class="bot"><li><a href="http://www.epsi.fr/Campus/Campus-de-Grenoble"> EPSI - </a></li><li><a href="http://www.ecoles-idrac.com/Idrac/Campus-de-Grenoble"> IDRAC - </a></li><li><a href="http://www.ecoles-supdecom.com/campus/grenoble/"> SupDeCom</a></li></div>
			</footer>
			</body></html>';
		}}
		if (estConnecte()){
			if (estAdmin()) /* Si la fonction estAdmin renvoie vrai alors: */
		 {
			$piedPage = '<footer> <div class="bot"><li><a href="index.php">Accueil - </a></li><li><a href="listelivre.php"> Liste - </a></li><li><a href="about.php"> A propos - </a></li><li><a href="ficheutilisateur.php?id='. $_SESSION['code'] . '"> Admin</a></li></div> <p> Site réalisé par les B1 EPSI Grenoble, 2016-2017 <a href="#"CGU</a></p><div class="bot"><li><a href="http://www.epsi.fr/Campus/Campus-de-Grenoble"> EPSI - </a></li><li><a href="http://www.ecoles-idrac.com/Idrac/Campus-de-Grenoble"> IDRAC - </a></li><li><a href="http://www.ecoles-supdecom.com/campus/grenoble/"> SupDeCom</a></li></div>
			</footer>
			</body></html>';
		}}
		else {
			$piedPage = '<footer> <div class="bot"><li><a href="index.php">Accueil - </a></li><li><a href="listelivre.php"> Liste - </a></li><li><a href="about.php"> A propos</a></li></div> <p> Site réalisé par les B1 EPSI Grenoble, 2016-2017 <a href="#"CGU</a></p><div class="bot"><li><a href="http://www.epsi.fr/Campus/Campus-de-Grenoble"> EPSI - </a></li><li><a href="http://www.ecoles-idrac.com/Idrac/Campus-de-Grenoble"> IDRAC - </a></li><li><a href="http://www.ecoles-supdecom.com/campus/grenoble/"> SupDeCom</a></li></div>
			</footer>
			</body></html>';
		}
		return $piedPage;
								/* Création de $piedpage qui contient du texte
								* et un lien hypertexte, possible de mettre des images */
	}


	/* -------------------- FONCTION GET RANDOM() ------------------ */

	function getRandom($nombre)
  /**
  *\author Hugo Lausenaz-Pire
  *\verificator Joseph Tabailloux
  *\enter La fonction prend en entré $nombre, étant le nombre de fois le tirage au sort
  *\brief Fonction qui tire au sort de nombre fois un id de livre
  *\test Regarder à partir de la ligne 43.
  *\return le tableau d'id de livre.
  */

  {
    global $bdd; /* J'importe la base de donnée en global de l'include connexion */
    $p_base = $bdd->query('SELECT COUNT(*) as compteur from objet');
    /* Requête SQL qui compte le nombre de livre */

    $tab = []; /*Création d'un tableau que l'on va renvoyer */
    $cpt = 0; /* Initialisation d'un compteur */
    $limite = $p_base->fetch(); /* Je parcours ma requête SQL que je stocke dans limite */
    $count = $limite['compteur'];/* Limite étant un tableau, je stock un int dans count */
    if($count < $nombre) { /* Si nombre est plus grand que count, je sécure
      en diminuant nombre qui prend alors la valeur de count */
      $nombre = $count;
    }
    /* Tant que le compteur est inférieur au nombre de livres choisis */
    while ($cpt < $nombre)
    {
      $test = rand(1, $count); /* Je génère un random entre 1 et le nb de livre de ma base */
      $trouve = False; /* J'initialise trouve en false */
      foreach ($tab as $valeur) /* Je parcours mon tableau avec la variable valeur */
      {

        if ($test == $valeur) /* Si random généré est un id du tableaux: */
        {
            $trouve = True; /* Ma variable trouve est vrai */
        }
      }
      if (!$trouve) { /* Si je ne trouve pas, donc if test != valeur */
        $cpt++; /* Compteur +1 pour la boucle while */
        $tab[] = $test; /* Je met le nombre généré dans le tableau, pour obtenir
         enfin un id aléatoire */
      }
    }
    return $tab; /* Je renvoit le tableau avec les id générée aléatoirement. */
  }


	/* -------------------- CONNEXION A LA BASE DE DONNEES ------------------ */
	/**
	**\author Joseph Tabailloux
	*\verificator Hugo Lausenaz Pire et Frederic Pinaud
	*\Fonction connexion à la base de données mysql
	*/
	define("DB_SERVER", "localhost");
	define("DB_BASE", "bibliotheque");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define('DB_SALT', 'Les5G'); // C'est le grain de sel

	$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
	$bdd = new PDO('mysql:host=' . DB_SERVER . ';dbname=' . DB_BASE, DB_USER, DB_PASSWORD, $pdo_options);
	$bdd->exec("Set character set utf8");


				/* -------------------- FONCTION MESSAGES() ------------------ */
				/* A FAIRE ET INTRODUIRE ICI */

				/* -------------------- "FONCTION" INDEX() ------------------ */
function Index()
{
				/*Importation de la fonction Menu*/
				$echo = Menu();
				$echo .= Carrousel();
				/*if (estConnecte()) {
					$echo .= $liste = getFavori($_SESSION['code'], Taille_Carrousel) ;
				}
				else {
					$liste = getRandom(3);
				}*/
				//$echo .= carrousel($liste);


				return $echo;

}
?>
