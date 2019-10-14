<?php
//our local DB
$password="tuSnO9ifvrcuI";
$email="tunu@gmail.com";

if (isset($_POST['email'])) {
	if (crypt($_POST['password'],"tunuprogrammer")===$password && $_POST['email']===$email){
		// echo "successful login";
		header("location: dashboard.php?error=wrong password or username");
	}
	else{
		header("location: login_form.php?error=wrong password or username");
	}
}