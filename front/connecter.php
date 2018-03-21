<?php
include_once('entete.html');
?>
<br>
<div>
<form action="panierNew.php" method="post">
  <fieldset>
    <legend> Connectez-vous </legend>
    <table>
      <tbody>
        <tr>
          <td>Identifiant : </td>
          <td> <input type="text" name="identifiant" size="20" maxlength="20"></td>
        </tr>
        <tr>
          <td>Mot de passe : </td>
          <td> <input type="password" name="motdepasse" size="10" maxlength="8"></td>
        </tr>
        <tr>
          <td colspan="2">
            <input type="submit" name="envoi" value="Se connecter">
          </td>
        </tr>
      </tbody>
    </table>
  </fieldset>
</form>
</div>
<div>
<center>
<a href="inscription.php"> Vous n'avez pas de compte ? S'inscrire </a>
</center>
</div>

<?php
include_once('pied.html');
?>

