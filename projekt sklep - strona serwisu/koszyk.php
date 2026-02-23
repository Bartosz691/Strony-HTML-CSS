<html>
<?php
session_start();
echo "<h4>W koszyku mamy ".count($_SESSION['produkty']);
echo "<p>Wybrales:</p>";
foreach($_SESSION['produkty'] as $i){
	echo "$i<br>";
}
?>
<head>
<style>
a{
	text-decoration:none;
}
</style>
</head>
<html>
<br><a href="wyczysckoszyk.php">Wyczysc koszyk</a>
<button><a href="index.php">Powrót do strony głównej</a></button> 
</html>