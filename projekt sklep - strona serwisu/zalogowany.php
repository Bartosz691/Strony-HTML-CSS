<!doctype html>
<head>
  
  <meta name="Author" content="Bartosz Wypych kl.3F" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Projekt aplikacje serwerowe Bartosz Wypych kl.3F</title>
</head>
<?php
session_start();
$host="localhost";
$user="root";
$password="";
$db="baza";
@$cos=$_SESSION['user'];
$polaczenie=mysqli_connect($host, $user, $password, $db);
$zapytanie="select Uprawnienia from uzytkownicy where login like '%$cos%'";
$wynik = mysqli_query($polaczenie,$zapytanie);
$ddd= mysqli_fetch_row($wynik);
if($ddd[0]=="administrator"){
echo "<br><p>Dodawanie oferty</p>";     
echo "<br><p>Usuwanie oferty</p>"; 
echo "<br><p>Wznawianie oferty</p>"; 
echo "<br><p>Wprowadzanie nowych informacji dla klientów</p>"; 
}
else if($ddd[0]=="uzytkownik"){
echo "<br><a href='produkty.php'>Przegladaj produkty</a>";     
echo "<br><a href='rejestracja.php'>Rejestracja</a>"; 
echo "<br><a href='promocje.php'>Zobacz promocje</a>"; 
echo "<br><a href='koszyk.php'>Edytuj profil</a>"; 
}
?>
<html>
<head>
</head>
<body>
    <a href='produkty.php'>Lista produktów</a>
    <br>
    <a href="wyloguj.php">Wyloguj</a>
	<button><a href="index.php">Powrót do strony głównej</a></button>
</body>
</html>