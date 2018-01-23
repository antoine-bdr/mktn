<?php 
$bdd = new PDO('mysql:host=localhost;dbname=tableaumktn;charset=utf8', 'root', ''); 

ini_set( 'display_errors', 'on' );
error_reporting( E_ALL );



if (isset($_POST['bouton'])) {

        //Insertion des données dans la bdd
        $numPM = htmlspecialchars(trim($_POST['numPM']));
        $adresse = htmlspecialchars(trim($_POST['adresse']));

        $req = $bdd->prepare('INSERT INTO pointmutualisation(numPM, adresse) VALUES(:numPM, :adresse)');
        
        $req->execute(array(
              'numPM' => $numPM,
              'adresse' => $adresse
               ));

/*        $i =1;
        while ($i <= 4) {

        
        $libelleTete = "test ";

        $req = $bdd->prepare('INSERT INTO tete(libelleTete, idPM) VALUES(:libelleTete, LAST_INSERT_ID())');
        
        $req->execute(array(
              ':libelleTete' => $libelleTete
               ));
        $i++;
        }

        $message = "PM ajouté"; */
    } 

?>
<br><br>
<html>
<head>
  <title>Formulaire</title>
</head>
<body>

<?php include ("menu.php") ?>
  <form action="#" method="POST">
    <fieldset>
          <legend>Création du PM</legend>

          <label for="numPM">Numéro PM: </label>
          <input  name="numPM"/><br><br>  

          <label for="adresse">Adresse PM: </label>
          <input type="text" name="adresse"/><br><br>

          <button type="submit" name="bouton" ><b>Ajouter</b></button>

      </fieldset>
  </form>

  <table>
    
  </table>
    <?php
      if (isset($message)) {
        echo $message;
      }

    ?>
</body>
</html>