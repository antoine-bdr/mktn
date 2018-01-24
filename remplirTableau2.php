<?php 
$bdd = new PDO('mysql:host=localhost;dbname=tableaumktn;charset=utf8', 'root', ''); 
session_start();

ini_set( 'display_errors', 'on' );
error_reporting( E_ALL );

$idPM = $_SESSION['idPM'];

if (isset($_POST['CREER'])) {

        //Insertion des données dans la bdd
        $epissure = htmlspecialchars(trim($_POST['epissure']));
        $PA = htmlspecialchars(trim($_POST['PA']));
        $TR = htmlspecialchars(trim($_POST['TR']));
        $PB = htmlspecialchars(trim($_POST['PB']));
		
		$truc="SELECT EXISTS (SELECT * FROM fibre WHERE numFibre=". $epissure ." AND idPM=". $idPM .") AS fibre_exists";
		$reqExist = $bdd->prepare($truc);
        $reqExist -> execute();
		$donnees = $reqExist->fetch();
        if($donnees['fibre_exists']==0)
		{
			for ($i=$epissure; $i < $epissure+6; $i++) 
			{ 
				$truc2="INSERT INTO fibre(numFibre, PA, TR, PB, idPM) VALUES('".$epissure."', '".$PA."', '".$TR."', '".$PB."', '".$idPM."')";
				$req = $bdd -> prepare($truc2);
				$req->execute();
			}
        }
		else
		{
        
          for ($i=$epissure; $i < $epissure+6; $i++) 
		  { 
			$req = $bdd -> prepare("UPDATE fibre SET PA =".$PA.", TR =".$TR.", PB =".$PB." WHERE numFibre =".$i." AND idPM =".$idPM."");  
            $req->execute();
          }
        }

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
              <OPTION value="1">1-6
              <OPTION value="7">7-12
              <?php }elseif ($cassette == "Cassette B") { ?>
              <OPTION value="13">13-18
              <OPTION value="19">19-24
              <?php }elseif ($cassette == "Cassette C") { ?>
              <OPTION value="25">25-30
              <OPTION value="31">31-36
              <?php }elseif ($cassette == "Cassette D") { ?>
              <OPTION value="37">37-42
              <OPTION value="43">43-48
              <?php }elseif ($cassette == "Cassette E") { ?>
              <OPTION value="49">49-54
              <OPTION value="55">55-60
              <?php }elseif ($cassette == "Cassette F") { ?>
              <OPTION value="61">61-66
              <OPTION value="67">67-72
              <?php }elseif ($cassette == "Cassette G") { ?>
              <OPTION value="73">73-78
              <OPTION value="79">79-84
              <?php }elseif ($cassette == "Cassette H") { ?>
              <OPTION value="85">85-90
              <OPTION value="91">91-96
              <?php }elseif ($cassette == "Cassette I") { ?>
              <OPTION value="97">97-102
              <OPTION value="103">103-108
              <?php }elseif ($cassette == "Cassette J") { ?>
              <OPTION value="109">109-114
              <OPTION value="115">115-120
              <?php }elseif ($cassette == "Cassette K") { ?>
              <OPTION value="121">121-126
              <OPTION value="127">127-132
              <?php }elseif ($cassette == "Cassette L") { ?>
              <OPTION value="133">133-138
              <OPTION value="139">139-144
              <?php } ?>
              
              
              

          </SELECT><br><br>

           <label for="PA">PA: </label>
          <input type="text" name="PA"/><br><br>

           <label for="TR">TR: </label>
          <input type="text" name="TR"/><br><br>

           <label for="PB">PB: </label>
          <input type="text" name="PB"/><br><br>

          <button type="submit" name="CREER" ><b>Créer</b></button>

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