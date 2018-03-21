<?php
echo "<h2> Votre panier </h2>\n";

switch ($_POST['envoi'])
{
// L'utilisateur est déjà inscrit
case "Se connecter" :
    $identifiant = 'root';
    $mot_de_passe= 'root';
	$hote='localhost'; // le chemin vers le serveur
	$bd='boutique';// nom de la BD
	try
	{
        $connexion = new PDO('mysql:host='.$hote.';dbname='.$bd, $identifiant, $mot_de_passe);
	}
 
	catch(Exception $e)
	{
        echo 'Une erreur est survenue !';
        die('Erreur : '.$e->getMessage().'<br />');
	}
    $pseudo = $_POST['identifiant'];
    $mot_de_passe= $_POST['motdepasse'];
    $req = $pdo->query('SELECT nom FROM client WHERE pseudo='$pseudo';');
	while($ligne = $req->fetch())
	{
		echo 'Bonjour : '.$ligne->nom.' Vous êtes connecté <br />'; // Utilisation des données.
	}
	$resultats->closeCursor(); // on ferme le curseur des résultats
    
break;

// L'utilisateur veut s'inscrire
case "S'inscrire" :
    // Recuperation des données dans le $_POST
    $pseudo       = $_POST['pseudo'];
    $mot_de_passe = $_POST['motdepasse'];
    $mot_de_passe2= $_POST['motdepasse2'];
    $nom          = $_POST['nom'];
    $prenom       = $_POST['prénom'];
    $jour         = $_POST['jour'];
    $mois         = $_POST['mois'];
    $annee        = $_POST['année'];
    $adresse      = $_POST['adresse'];
    $code         = $_POST['code'];
    $ville        = $_POST['ville'];
    $courriel     = $_POST['courriel'];
    
    // Vérification des valeurs
    if (($mot_de_passe != $mot_de_passe2)
      or empty($pseudo)
      or empty($mot_de_passe)
      or empty($nom)
      or empty($prenom)
      or empty($jour)
      or empty($mois)
      or empty($annee)
      or empty($adresse)
      or empty($code)
      or empty($ville)
      or empty($courriel)
      or !checkdate($mois,$jour,$annee))
    {
        echo 'Inscription non-valide. ';
        echo '<a href="inscription.php"> Réessayer. </a>';
    }
    else
    {
        // Connexion à la base MySQL
        $connexion = connecter();
        // Vérifier que le pseudo n'est pas déjà existant
        $sql = "SELECT * FROM client WHERE pseudo='$pseudo';";
        $resultat = mysqli_query($connexion, $sql);
        if (mysqli_num_rows($resultat) != 0) {
            echo "Le pseudo « $pseudo » est déjà pris. ";
            echo '<a href="inscription.php"> Réessayer. </a>';
        }
        else
        {   // Ajouter le nouveau client
            $date_de_naissance = "$annee-$mois-$jour";
            $sql ='INSERT INTO client (pseudo, motdepasse, nom, prenom, datedenaissance, adresse, codepostal, ville, courriel)';
            $sql.=" VALUES ('$pseudo', '$mot_de_passe', '$nom', '$prenom', '$date_de_naissance', '$adresse', $code, '$ville', '$courriel') ;";
            $resultat = mysqli_query($connexion, $sql);
        }
        mysqli_close($connexion);
    }

}


?>
