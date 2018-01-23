
<?php 
$bdd = new PDO('mysql:host=localhost;dbname=tableaumktn;charset=utf8', 'root', ''); 

ini_set( 'display_errors', 'on' );
error_reporting( E_ALL );

$req = 'SELECT * FROM pointmutualisation';
    $pm = $bdd->prepare($req);
    $pm->execute();
    $donneesPM = $pm->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['bouton'])) {

        //Insertion des données dans la bdd
        $numPM = htmlspecialchars(trim($_POST['numPM']));
        $adresse = htmlspecialchars(trim($_POST['adresse']));

        $req = $bdd->prepare('INSERT INTO connexion(numPM, adresse) VALUES(:numPM, :adresse)');
        
        $req->execute(array(
              'numPM' => $numPM,
              'adresse' => $adresse
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
  <form>
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

          <label for="tete">Tete: </label>
          <input  name="tete"/><br><br>  

          <label for="cassette">Cassette: </label>
          <input type="text" name="cassette"/><br><br>

           <label for="epissure">Epissure: </label>
          <input type="text" name="epissure"/><br><br>

           <label for="PA">PA: </label>
          <input type="text" name="PA"/><br><br>

           <label for="TR">TR: </label>
          <input type="text" name="TR"/><br><br>

           <label for="PB">PB: </label>
          <input type="text" name="PB"/><br><br>

           <label for="numFibre">Numéro Fibre: </label>
          <input type="text" name="numFibre"/><br><br>

          <button type="submit" name="bouton" ><b>Créer</b></button>

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