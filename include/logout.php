<?php
  session_start();
  session_unset();
  session_destroy();

  if(empty($_SESSION['email']))
  {
  	header("location: ../login_form.php");
  }