<?php 
$bdd = new PDO('mysql:host=localhost;dbname=tableaumktn;charset=utf8', 'root', ''); 
session_start();

ini_set( 'display_errors', 'on' );
error_reporting( E_ALL );


if (isset($_POST['bouton'])) {

        //Insertion des données dans la bdd
        $epissure = htmlspecialchars(trim($_POST['epissure']));
        $PA = htmlspecialchars(trim($_POST['PA']));
        $TR = htmlspecialchars(trim($_POST['TR']));
        $PB = htmlspecialchars(trim($_POST['PB']));

        $req = $bdd->prepare('INSERT INTO fibre(PA, TR, PB, idPM) VALUES(:PA, :TR, :PB, :idPM)');
        
        $req->execute(array(
              ':PA' => $PA,
              ':TR' => $TR,
              ':PB' => $PB,
              ':idPM' => $_SESSION['idPM']
               ));

            $message= "Création du tableau en cours";
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
          <legend> Configuration du PM <?php echo $_SESSION['idPM']; ?> </legend>

          <label for="tete">Tête: </label>
          <SELECT name="tete" size="1">
            <OPTION>1
            <OPTION>2
            <OPTION>3
            <OPTION>4
          </SELECT><br><br>

          <label for="cassette">Cassette: </label>
          <SELECT name="cassette" size="1">
            <OPTION>Cassette A
            <OPTION>Cassette B
            <OPTION>Cassette C
            <OPTION>Cassette D
            <OPTION>Cassette E
            <OPTION>Cassette F
            <OPTION>Cassette G
            <OPTION>Cassette H
            <OPTION>Cassette I
            <OPTION>Cassette J
            <OPTION>Cassette K
            <OPTION>Cassette L
          </SELECT><br><br>

          <button type="submit" name="confirmer" ><b>Confirmer</b></button><br><br>
          <?php
          if (isset($_POST['confirmer'])) {
              $tete = htmlspecialchars(trim($_POST['tete']));
              $cassette = htmlspecialchars(trim($_POST['cassette']));
              
              ?>

           <label for="epissure">Epissure: </label>
            <SELECT name="epissure" size="1">
              <?php if ($cassette == "Cassette A") { ?>
              <OPTION>1-6
              <OPTION>7-12
              <?php }elseif ($cassette == "Cassette B") { ?>
              <OPTION>13-18
              <OPTION>19-24
              <?php }elseif ($cassette == "Cassette C") { ?>
              <OPTION>25-30
              <OPTION>31-36
              <?php }elseif ($cassette == "Cassette D") { ?>
              <OPTION>37-42
              <OPTION>43-48
              <?php }elseif ($cassette == "Cassette E") { ?>
              <OPTION>49-54
              <OPTION>55-60
              <?php }elseif ($cassette == "Cassette F") { ?>
              <OPTION>61-66
              <OPTION>67-72
              <?php }elseif ($cassette == "Cassette G") { ?>
              <OPTION>73-78
              <OPTION>79-84
              <?php }elseif ($cassette == "Cassette H") { ?>
              <OPTION>85-90
              <OPTION>91-96
              <?php }elseif ($cassette == "Cassette I") { ?>
              <OPTION>97-102
              <OPTION>103-108
              <?php }elseif ($cassette == "Cassette J") { ?>
              <OPTION>109-114
              <OPTION>115-120
              <?php }elseif ($cassette == "Cassette K") { ?>
              <OPTION>121-126
              <OPTION>127-132
              <?php }elseif ($cassette == "Cassette L") { ?>
              <OPTION>133-138
              <OPTION>139-144
              <?php } ?>
              
              
              

          </SELECT><br><br>

           <label for="PA">PA: </label>
          <input type="text" name="PA"/><br><br>

           <label for="TR">TR: </label>
          <input type="text" name="TR"/><br><br>

           <label for="PB">PB: </label>
          <input type="text" name="PB"/><br><br>

          <button type="submit" name="bouton" ><b>Créer</b></button>

          <?php } ?>


      </fieldset>
  </form>

  <table>
    
  </table>
  <?php
  if(isset($message)){
    echo $message;
  }

  ?>
</body>
</html>