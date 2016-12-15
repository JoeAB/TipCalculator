<?php
		$valid = true;
		$errorList = array();
		$subtotal = $_POST["subtotal"];
		if($subtotal <= 0){
			array_push($errorList, "Must enter a valid subtotal. Must be greater than 0 dollars.");
			$valid = false;
		}
		$percentValue = $_POST["percent"];
		if($percentValue <= 0){
			array_push($errorList, "Must enter a valid percentage. Must be greater than 0.");
			$valid = false;
		}
		$splitting = $_POST["split"];
		if($splitting <= 0){
			array_push($errorList, "Must enter a valid number for split. Must be at least one person.");
			$valid = false;
		}
		$percentValue = $percentValue / 100.0;
		
		if($valid){
			$tip = $subtotal * $percentValue; //calculates the tip on the order
			$total = $tip + $subtotal; // calculates the total bill
			$tipSplit = $tip / $splitting; //calulates how much of the tip each person pays
			$totalSplit = $total / $splitting; //calculates how much each person pays
		}

?>
<html>
	<head>
		<title>Tip Calculator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table id="calculator-body">
		<?php
		if($valid){
		?>	
			<tr>
				<td>Total Tip: <?php echo money_format("$%i", $tip) ?> </td>
			</tr>
			<tr>
				<td>Total Bill: <?php echo money_format("$%i", $total) ?></td>
			</tr>
			<?php 
				if($splitting > 1){
			?>
			<tr>
				<td>Indidual Tip: <?php echo money_format("$%i", $tipSplit) ?></td>
			</tr>
			<tr>
				<td>Individual Total: <?php echo money_format("$%i", $totalSplit) ?></td>
			</tr>
			<?php
			}
		}
		else{
				foreach ($errorList  as $value){
			?>
				<tr>
					<td>  <?php echo("$value") ?></td>
				</tr>
			<?php 
				}
			}
			?>
		</table>
	</body>
</html>