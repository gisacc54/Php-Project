<?php
if (isset($_POST['email'])) {
	echo "Name: ".$_POST['fname']." ".$_POST['lname']."<br>";
	echo "Enail: ".$_POST['email']."<br>";
	echo "Password: ".crypt($_POST['password'],"tunuprogrammer")."<br>";
}


// var_dump($_POST);