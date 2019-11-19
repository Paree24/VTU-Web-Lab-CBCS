<?php
$a=[];
$conn=mysqli_connect("localhost","root","unix","weblab");
if($conn->connect_error)
    die("Connection failed:".$conn->connect_error);
$sql='SELECT * FROM student';
$result=$conn->query($sql);
echo "<div align=center><br>BEFORE SORTING";
echo "<table border style='border-collapse:collapse;background-color:lightblue;'>";
echo "<tr><th>USN</th><th>NAME</th><th>Address</th></tr>"; 
if($result->num_rows>0)
    while($row=$result->fetch_assoc()) {
        echo "<tr><td>".$row['usn']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        array_push($a,$row['usn']);
    }
else
    echo "Table Empty";
echo "</table>";
$n=count($a);
$b=$a;
for($i=0;$i<($n-1);$i++){
    $pos=$i;
    for($j=$i+1;$j<$n;$j++)
        if($a[$pos]>$a[$j])
            $pos=$j;
    if($pos!=$i){
        $temp=$a[$i];
        $a[$i]=$a[$pos];
        $a[$pos]=$temp;
    }
}
$c=[];
$d=[];
$result=$conn->query($sql);
if($result->num_rows>0)
    while($row=$result->fetch_assoc())
        for($i=0;$i<$n;$i++)
            if($row['usn']==$a[$i]){
                $c[$i]=$row["name"];
                $d[$i]=$row["address"];
            }
echo "<br>AFTER SORTING";
echo "<table border style='border-collapse:collapse;background-color:lightblue;'>";
echo "<tr><th>USN</th><th>NAME</th><th>Address</th></tr>"; 
for($i=0;$i<$n;$i++){
    echo "<tr><td>".$a[$i]."</td>";
    echo "<td>".$c[$i]."</td>";
    echo "<td>".$d[$i]."</td></tr>";
}
echo "</table></div>";
$conn->close();
?>
