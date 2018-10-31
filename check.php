<?php
  session_start();

  $pass = $_GET["pass"];
  $guess = $_GET["guess"];

  $text = $_SESSION["captcha"];

  if ($guess== $text){
      echo "got captcha <br>";
  }else{
      echo "not captcha <br>";
  }

  if ($pass == 123){
      echo "got pass <br>";
  }else{
      echo "not pass <br>";
  }

?>
