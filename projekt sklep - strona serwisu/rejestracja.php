<!doctype html>
<html>
<head>
  
  <meta name="Author" content="Bartosz Wypych kl.3F" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Projekt aplikacje serwerowe Bartosz Wypych kl.3F</title>
  <style>
  p{
	  color:white;
  }
  </style>
</head>
<body>
    <form method="post">
	<p>-Login</p>
    <input type="text" name="login"><br>
	<p>-Hasło</p>
    <input type="tetxt" name="haslo"><br>
    <input type="submit" value="Zarejestruj">
    </form>
</body>
     <?php
@$login=$_POST["login"];
@$haslo=$_POST["haslo"];
$host="localhost";
$user="root";
$password="";
$db="baza";
if(!$login or !$haslo){
	echo "brak loginu lub hasla! ";
}
else{
$polaczenie=mysqli_connect($host, $user, $password, $db);
if(mysqli_connect_errno())
{
echo "Błąd połączenia";
}	
else{
$zap="INSERT INTO uzytkownicy values('$login','$haslo','uczen')";
$wynik = mysqli_query($polaczenie,$zap);	

mysqli_close($polaczenie);
}
}
    
	?>
	<br/>
  <button><a href="index.php">Powrót do strony głównej</a></button>          
    
    
</html>