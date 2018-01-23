<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<caption>Tete 1</caption>
			<tr>
				<th>Cassette 1</th>
				<th>Cassette 2</th>
				<th>Cassette 3</th>
				<th>Cassette 4</th>
				<th>Cassette 5</th>
				<th>Cassette 6</th>

			</tr>
	
		<?php
				
					for($i = 1; $i <= 12; $i++)
					{ 
				
						echo "<tr>";
					
						$k=$i;
						for($j=1; $j<12; $j++)
						{
							
							echo "<td>$k</td>";
							$k=$k+12; 
						}
						
						echo "</tr>";
					
					} ?>
				

		</table>

</body>
</html>