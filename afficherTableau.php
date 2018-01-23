<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<caption>Tete 1</caption>
			<tr>
				<td colspan="2">Cassette 1</td>
				<td colspan="2">Cassette 2</td>
				<td colspan="2">Cassette 3</td>
				<td colspan="2">Cassette 4</td>
				<td colspan="2">Cassette 5</td>
				<td colspan="2">Cassette 6</td>

			</tr>
	
		<?php
				
					for($i = 1; $i <= 12; $i++)
					{ 
				
						echo "<tr>";
					
						$k=$i;
						for($j=1; $j<=12; $j++)
						{
							
							echo "<td>$k</td>";
							$k=$k+12; 
						}
						
						echo "</tr>";
					
					} ?>
				

		</table>

</body>
</html>