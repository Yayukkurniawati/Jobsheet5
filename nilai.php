<html>
<head>
<title>Function Dengan 2 Parameter</title>
</head>
<body>
<?php 
echo"<b>";
function panggil($nilai1,$nilai2) 
{
	$total=$nilai1*$nilai2;
	return $total;
}
$a=55;
$i=34;
	$total=$a+$i;
	echo"Nilai \$total sebelum function adalah $i +$a = $total <br>";
	
	$total=panggil($a,$i);
	echo"Nilai \$total setelah function adalah $total (perkalian $a x $i ) ";
	
echo"</b>";
?>
</body>
</html>