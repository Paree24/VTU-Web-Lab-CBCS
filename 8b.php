<?php
	$a= array(array(1,2,3),array(4,5,6),array(7,8,9));
	$b= array(array(7,8,9),array(4,5,6),array(1,2,3))
	$m=count($a);
	$n=count($a[2]);
	$p=count($b);
	$q=count($b[2]);
	echo "First Matrix: <br>";
	for ($i=0;$i<$m;$i++) { 
		for ($j=0;$j<$n;$j++) 
			echo " ".$a[$i][$j];
		echo "<br>";
	}
	echo "Second Matrix: <br>";
	for ($i=0;$i<$p;$i++) { 
		for ($j=0;$j<$q;$j++) 
			echo " ".$b[$i][$j];
		echo "<br>";
	}
	echo "Transpose of First Matrix: <br>";
	for ($i=0;$i<$m;$i++) { 
		for ($j=0;$j<$n;$j++)
			echo " ".$a[$j][$i];
		echo "<br>";
	}
	if (($m==$p) and ($n==$q)) {
		echo "Addition of Matrices: <br>";
		for ($i=0;$i<$m;$i++) { 
			for ($j=0;$j<$n;$j++) 
				echo " ".$a[$i][$j]+$b[$i][$j];
			echo "<br>";
		}
	}
	if ($n==$p) {
		echo "Multiplication of Matrices: <br>";
		$r=array()
		for ($i=0;$i<$m;$i++) { 
			for ($j=0;$j<$q;$j++) { 
				$r[$i][$j]=0;
				for ($k=0;$k<$n;$k++) 
					$r[$i][$j]+=$a[$i][$j]*$b[$i][$j];
			}
		}
		for ($row = 0; $row < $m; $row++) {
			for ($col = 0; $col < $q; $col++)
				echo " ".$result[$row][$col];
			echo "<br/>";
		}
?>