<!doctype html>
<?php
   session_start();
   if(!isset($_SESSION['produkty'])){
	   $_SESSION['produkty']=array();
   }
   foreach($_POST as $i){
	   $_SESSION['produkty'][]=$i;
   }
?>
<html>
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
<body>

 
	<form method="post" name="produkty">
       <p>Opony Pirelli<input type="checkbox" name="opony" value="opony"></p>
	    <p>Olej do silnika Quantum<input type="checkbox" name="olej" value="olej"></p>
		 <p>Srebrny spoiler uniwersalny<input type="checkbox" name="spoiler" value="spoiler"></p>
		  <p>Zapach choinka<input type="checkbox" name="zapach" value="zapach"></p>
		   <p>Pierscien redukcyjny<input type="checkbox" name="pierscien" value="pierscien"></p>
		   <p>Zarowki halogeny<input type="checkbox" name="zarowki" value="zarowki"></p>
		 <input type="submit">
     </form>
  <p><a href="koszyk.php">Pokaż koszyk!</a></p>
    <button><a href="index.php">Powrót do strony głównej</a></button> 
</body>
</html>