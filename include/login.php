<?php
session_start();
//our local DB
include("info.php");
if (isset($_POST['email'])) {
	if (crypt($_POST['password'],"tunuprogrammer")===$password && $_POST['email']===$email){
		// echo "successful login";
		$_SESSION['email']=$_POST['email'];
		header("location: ../dashboard2.php");
	}
	else{
		header("location: ../login_form.php?error=wrong password or username");
	}
}