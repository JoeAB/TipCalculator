<html>
	<head>
		<title>Tip Calculator</title>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/prototype/1.6.0.3/prototype.js"></script>
		<script type="text/javascript" src="tipScript.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<table id="calculator-body">
			<tr>
				<td><h2>Tip Calculator</h2></td>
			</tr>
			<tr>
				<td>Bill Subtotal: $<input type="text"  id="subtotal" value="100" /></td>
			</tr>
			<tr>
				<td>Tip Percentage:<td/>
			</tr>
			<tr>
				<td>
					<?php
						$percentValue = 10;
						for($percentValue = 10; $percentValue <= 20; $percentValue+=5){					
					?>
					
					<input type="radio"  name="percent" id="percent" onclick="customPercent()"
					value=" <?php echo $percentValue ?> " <?php if($percentValue==10){ ?> checked <?php } ?>/>
					<?php echo $percentValue?> %
					
					<?php } ?>
				</td>
			</tr>
			<tr>
				<td><input type="radio" name="percent" id="percent" value="0" onclick="customPercent()"> Custom: 
				<input type="text" id="customPercent" /> 
			</tr>
			<tr>
				<td> Split: <input type="text"  id="split" value="1" /> Person(s)</td> 
			</tr>
			<tr>
				<td><input type="button" value="Submit" onclick="calculate()"/></td>
			</tr>
		</table>
		<div id="results">
		</div>
	</body>
</html>