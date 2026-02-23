<!doctype html>
 <html>
    <head>
	  <meta charset="utf-8">
	  <title>Projekt sklep motoryzacyjny Krakcar.pl Bartosz Wypych kl.3F</title>
	           <link rel="shortcut icon" href="images/favicon.ico">
			   <style>
	body{
	   margin:0 auto;
	   padding:0px;
	   font-family:font1;
	}
	@font-face{
	  font-family:font1;
	  src:url('fonty/font1.ttf');
	  
	 
	}
	a{
		text-decoration:none;
		color:black;
	}
	div{
		height:500px;
		width:930px;
		
	}
	
	footer{
	    width:100%
		height:52%;
		position:relative;
		top:500px;
			 background-color:#daf2f1;
			 text-align:center;
	}
	</style>
	</head>
	<body>
	  <h1>Oto nasze aktualne promocje: &nbsp; &nbsp;<button><a href="index.php">Powrót do strony głównej</a></button></h1>	
	  <?php
	  header('refresh: 2;');
	   $tab = array("1.jpg","2.jpg","3.jpg","4.jpg","5.jpg");
	   $tab1=array("Ceny o 50% niższe na cały asortyment ","Do każdego zamówienia powyżej 220zł wysyłka gratis!","Świetna okazja!","Przecena na wszystkie oleje i smary!","Naprawdę okazja warta wykorzystania!");
         $los=rand(1,5);
		 if($los==0){
			  echo"<div border='1' height='350px' width='720px'>";
      echo "<img src='obrazy/".$tab[0]."' alt='promocja'>";
	  echo "<p>".$tab1[0]."</p>";
      echo "</div>"; 
	}else{
		 
	  echo"<div border='1' height='350px' width='720px'>";
      echo "<img src='images/".$tab[$los]."' alt='promocja'>";
	   echo "<p>".$tab1[$los]."</p>";
      echo "</div>";
	}
	
	?>
<button><a href="index.php">Powrót do strony głównej</a></button>

	</body>
	</html>