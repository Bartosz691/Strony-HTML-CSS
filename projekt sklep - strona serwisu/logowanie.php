<!doctype html>
<head>
  
  <meta name="Author" content="Bartosz Wypych" />
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>Projekt aplikacje serwerowe Bartosz Wypych</title>
  <style>
  p{
	  color:white;
  }
  </style>
</head>
<?php
session_start();
@$login=$_POST['login'];
@$haslo=$_POST['haslo'];
$host="localhost";
$user="root";
$password="";
$db="baza";
$polaczenie=mysqli_connect($host,$user,$password,$db);
if(($login==" ")&&($haslo==" ")){
	echo "haslo i login nie moga byc puste!";
}else{
}
$zapytanie="select Login,Haslo from uzytkownicy where Login like '%$login%' and Haslo like '%$haslo%'";    
$wynik = mysqli_query($polaczenie,$zapytanie);
$ile = mysqli_num_rows($wynik);
if($ile==1){
$_SESSION['user']=$login;   
echo '<script>location.replace("zalogowany.php")</script>'; 
}else{
}
    
?>
<html>

<body>
     <form method="post">
	 <p>-Login</p>
    <input type="text" name="login"><br>
	<p>-Hasło</p>
    <input type="text" name="haslo"><br>
    <input type="submit" value="Zaloguj">
    </form>
    
    
   <form action="zalogowany.php">
<input type="submit" value="zaloguj jako gosc">
    </form>
 
  <form action="rejestracja.php" onclick="ddd()">
<input type="submit" value="Zarejestruj">
    </form><br/>
	<button><a href="index.php">Powrót do strony głównej</a></button>
</body>
</html>