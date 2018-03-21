<?php
include_once('entete.html');
?>
<br>
<div>
<form action="panier.php" method="post">
  <fieldset>
    <legend> Inscrivez-vous </legend>
    <table>
      <tbody>
        <tr>
          <td> <label for="pseudo"> Pseudo : </label> </td>
          <td> <input type="text" id="pseudo" name="pseudo" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td> <label for="motdepasse"> Mot de passe : </label> </td>
          <td> <input type="password" id="motdepasse" name="motdepasse" size="20" maxlength="20"></td>
        </tr>
        <tr>
          <td> <label for="motdepasse2"> Confirmation du mot de passe : </label> </td>
          <td> <input type="password" id="motdepasse2" name="motdepasse2" size="20" maxlength="20"></td>
        </tr>
        <tr>
          <td> <label for="nom"> Nom : </label> </td>
          <td> <input type="text" id="nom" name="nom" size="20" maxlength="20"></td>
        </tr>
        <tr>
          <td> <label for="prénom"> Prénom : </label> </td>
          <td> <input type="text" id="prénom" name="prénom" size="20" maxlength="20"></td>
        </tr>
        <tr>
          <td> Date de naissance : </td>
          <td>
            <label> jour : <input type="number" name="jour" min="1" max="31"> </label>
            <label> mois : <input type="number" name="mois" min="1" max="12"> </label>
            <label> année : <input type="number" name="année" min="1900" max="2015"> </label>
          </td>
        </tr>
        <tr>
          <td> <label for="adresse"> Adresse : </label> </td>
          <td> <input type="text" id="adresse" name="adresse" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td> <label for="code"> Code postal : </label> </td>
          <td> <input type="number" id="code" name="code" min="0" max="99999"></td>
        </tr>
        <tr>
          <td> <label for="ville"> Ville : </label> </td>
          <td> <input type="text" id="ville" name="ville" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td> <label for="courriel"> Courriel : </label> </td>
          <td> <input type="email" id="courriel" name="courriel" size="40" maxlength="40"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="envoi" value="S'inscrire">
          </td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</form>
</div>
<div>
<center>
<a href="connecter.php"> Vous êtes déjà inscrit(e) ? Connectez-vous </a>
</center>
</div>

<?php
include_once('pied.html');
?>

