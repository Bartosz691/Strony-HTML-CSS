<!Doctype Html>
<?php
session_start();
echo "Żegnaj ".$_SESSION['user'];
session_destroy();
?>
<html>
<head>
</head>
<body>
  Zapraszamy ponownie<br>
  <a href="logowanie.php">Logowanie</a>
</body>
</html>