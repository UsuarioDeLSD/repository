<!DOCTYPE html>
<head>
<tilte> Exercicio While</title>
</head>
<body>


<form method="Post" action="while_tab.php">
			Digite um numero
		<input type="text" name="numero" 
		placeholder="Digite um numero"/>
<br/><br/>		
</form>


<?php
$numt = $_POST['numero'];
$num_max = 0;
$r = 0;
$;
$;


echo "<table border = '1'>";
echo "<p>Tabuada do $numt</p>";
while ($num_max <= 10) {

$r = $num_max * $numt;

echo "<tr>";
echo "<td>$numt</td>";
echo "<td>X</td>";
echo "<td>$num_max</td>";
echo "<td>=</td>";
echo "<td>$r</td></tr>";

$num_max++;

}
echo "</table>";
?>






</body>
</body>
</html>