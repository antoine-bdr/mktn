<?php 
$bdd = new PDO('mysql:host=localhost;dbname=tableaumktn;charset=utf8', 'root', ''); 
session_start();

ini_set( 'display_errors', 'on' );
error_reporting( E_ALL );

$req = 'SELECT * FROM pm';
    $pm = $bdd->prepare($req);
    $pm->execute();
    $donneesPM = $pm->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['bouton'])) {
      $idPM = $_POST['idPM'];
      $_SESSION['idPM'] = $idPM;
      header('Location: remplirTableau2.php');
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
          <legend>	Remplissage du PM</legend>

          <div class="form-group"> <!-- Communes -->
            
             PM : 
              <SELECT value="idPM" name="idPM" type="text" size="1">
                  
                  <?php
                  foreach ($donneesPM AS $donneePM)
                  {
                    ?>
                  
                  <option value="<?php echo $donneePM['idPM']; ?>"> <?php echo $donneePM['idPM']."- ".$donneePM['numPM']; ?> </option>

                  <?php
                  }
                  ?>
              </SELECT>

                        </div>


              <button type="submit" name="bouton" ><b>Choisir</b></button>

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