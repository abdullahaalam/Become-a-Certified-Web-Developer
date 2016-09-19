<!DOCTYPE html>
<html lang="en">
	<head>
		<title>PHP Lab Exercise 2</title>
	</head>
	<body>
		<?php
			$Operand1 = 15.55;
			$Operand2 = 2.94;
			echo($Operand1 . " + " . $Operand2 . " = " . ($Operand1 + $Operand2));
			echo("<br/>");
			echo($Operand1 . " - " . $Operand2 . " = " . ($Operand1 - $Operand2));
			echo("<br/>");
			echo($Operand1 . " * " . $Operand2 . " = " . ($Operand1 * $Operand2));
			echo("<br/>");
			echo($Operand1 . " / " . $Operand2 . " = " . ($Operand1 / $Operand2));
			echo("<br/>");
			echo($Operand1 . " % " . $Operand2 . " = " . ($Operand1 % $Operand2));
			echo("<br/>");
			
			$phrase = "If you are strong enough, there are no precedents.";
			$author = "-Unknown";
			echo $phrase;
			echo("<br/>");
			echo $phrase." ".$author;	
		?>
	</body>
</html>