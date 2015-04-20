<?php
  session_start();
  unset($_SESSION["UsuarioLogueado"]); 
  session_destroy();
  header("Location: index.php");
  exit;
?>