<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" media="screen" type="text/css" title="index" href="css/menu.css" />
	<title></title>
</head>
<body>
	<table border="1" style="text-align: center">
		<?php
		$bdd = new PDO('mysql:host=localhost;dbname=tableaumktn;charset=utf8', 'root', ''); 
		$k=0;
		$h = 0;
		for ($t=1; $t<=4; $t++){
			?>

		<tr><td class ="tete" colspan="13">Tete <?php echo $t?></caption>
			<tr class="cassette">
				
				<td></td>
				<td colspan="2">Cassette 1</td><!--td horizontale et tr verticale-->
				<td colspan="2">Cassette 2</td>
				<td colspan="2">Cassette 3</td>
				<td colspan="2">Cassette 4</td>
				<td colspan="2">Cassette 5</td>
				<td colspan="2">Cassette 6</td>
				
			</tr>

				<tr>
					<td></td>
					<td class="lettre"> A </td>
					<td class="lettre"> B </td>
					<td class="lettre"> C </td>
					<td class="lettre"> D </td>
					<td class="lettre"> E </td>
					<td class="lettre"> F </td>
					<td class="lettre"> G </td>
					<td class="lettre"> H </td>
					<td class="lettre"> I </td>
					<td class="lettre"> J </td>
					<td class="lettre"> K </td>
					<td class="lettre"> L </td>
					
				</tr>
				
		<?php
				    
					for($i = 1; $i <= 12; $i++)
					{ 
				
						echo "<tr>";
						echo "<td>$i</td>"; // ca affiche le i qui va de 1 a 12 en vertical car i represente les données en verticale et j les données en horizontale					
						$k=$i;
						for($j=1; $j<=12; $j++)
						{
							$numFibre = $k + $h;
							echo "<td>$numFibre</td>";
							$k=$k+12;
						}
						
						echo "</tr>";
					

					}
			$h = $numFibre;

		} 

					 ?>
				
			

		</table>
	<?php	$req = 'SELECT * FROM pm';
    $pm = $bdd->prepare($req);
    $pm->execute();
    $donneesPM = $pm->fetchAll(PDO::FETCH_ASSOC);

    $idPM = ["idPM"];

    $req =  $bdd -> prepare('SELECT * FROM fibre, pm WHERE fibre.idPM = pm.idPM AND pm.idPM = "$idPM"');
    $req -> execute();
    $detail = $req -> fetch();

    $detail["PA"];
    $detail["TR"];
   ?>

    <?php include ("menu.php") ?>
  <form action="#" method="POST">
    <fieldset>
          <legend>	Remplissage du PM</legend>

          <div class="form-group"> 
            
             PM : 
              <SELECT value="idPM" name="idPM" type="text" size="1">
                  
                  <?php
                  foreach ($donneesPM AS $donneePM)
                  {
                    ?>
                  
                  <option value="<?php echo $donneePM['idPM']; ?>"> <?php echo $donneePM['numPM']."- ".$donneePM['adresse']; ?> </option>

                  <?php
                  }
                  ?>
              </SELECT>

                        </div>


              <button type="submit" name="bouton" ><b>Choisir</b></button>

      </fieldset>

		

</body>
</html>