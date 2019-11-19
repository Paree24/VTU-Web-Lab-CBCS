<html>
    <head>
    	<style>
    		table,td,th
    		{
    			border: 1px solid black;
    			width: 33%;
    			text-align: center;
    			background-color: grey;
    		}
    		table{margin: auto;}
    		input,p{text-align: right;}
    	</style>
    </head>
    <body>
    	<form method="post">
    		<table>
    			<caption><h2>Simple Calculator</h2></caption>
    			<tr>
    				<td>First Number</td><td><input type="text" name="num1"></td>
    				<td rowspan="2"><input type="submit" name="submit" value="calculate"> </td>
    			</tr>
    			<tr>
    				<td>First Number</td><td><input type="text" name="num1"></td>
    			</tr>
    	</form>
    	<?php 
    		if (isset($_POST['submit'])) {
    			$num1=$_POST['num1'];
    			$num2=$_POST['num2'];
    			if (is_numeric($num1) and is_numeric($num2)) {
    				echo "<tr><td>Addition:</td><td>".($num1+$num2)."</td></tr>";
    				echo "<tr><td>Subtraction:</td><td>".($num1-$num2)."</td></tr>";
    				echo "<tr><td>Mulitplication:</td><td>".($num1*$num2)."</td></tr>";
    				echo "<tr><td>Division:</td><td>".($num1/$num2)."</td></tr>";
    			}
    			else
    				echo "<script>alert('Enter a valid number');</script>";
    		}
    	?>
    </body>
</html>