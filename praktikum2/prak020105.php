<!DOCTYPE html>
<html>
<head>Headings</head>
<body>
	<?php 
		$i=1;
		do {
			if ($i % 2 == 0){ 
				echo "<font color ='red'> <h".$i.">Heading ".$i."</h".$i."></font>";
				$i++;

			}
			else{
				echo "<h".$i.">Heading ".$i."</h".$i.">";
				$i++;
			}
		} while ($i<7);
		
	 ?>


</body>
</html>