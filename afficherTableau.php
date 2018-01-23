<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<?php
		$k=0;
		$h = 0;
		for ($t=1; $t<=4; $t++){


		?>
		<tr><td colspan="12">Tete <?php echo $t?></caption>
			<tr>
				<td colspan="2">Cassette 1</td>
				<td colspan="2">Cassette 2</td>
				<td colspan="2">Cassette 3</td>
				<td colspan="2">Cassette 4</td>
				<td colspan="2">Cassette 5</td>
				<td colspan="2">Cassette 6</td>

			</tr>
				<tr>
					<td> A </td>
					<td> B </td>
					<td> C </td>
					<td> D </td>
					<td> E </td>
					<td> F </td>
					<td> G </td>
					<td> H </td>
					<td> I </td>
					<td> J </td>
					<td> K </td>
					<td> L </td>
					
				</tr>
		<?php
				    
					for($i = 1; $i <= 12; $i++)
					{ 
				
						echo "<tr>";
					
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

</body>
</html>