<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" media="screen" type="text/css" title="index" href="css/menu.css" />
</head>
<body>
	<table border="1" class="cassette">
		<?php
		$k=0;
		$h = 0;
		for ($t=1; $t<=4; $t++){


		?>
		<tr><td colspan="12">Tete <?php echo $t?></caption>
			<tr class="cassette">
				<td colspan="2">Cassette 1</td>
				<td colspan="2">Cassette 2</td>
				<td colspan="2">Cassette 3</td>
				<td colspan="2">Cassette 4</td>
				<td colspan="2">Cassette 5</td>
				<td colspan="2">Cassette 6</td>

			</tr>
				<tr >
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