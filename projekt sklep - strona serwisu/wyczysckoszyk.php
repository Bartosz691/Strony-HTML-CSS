<?php
  session_start();
  $_SESSION['produkty']=array();
  session_destroy();
  echo "Koszyk wyczyszczony!";

?>