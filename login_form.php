<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="asset/jquery-3.4.1.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		
<div class="col-md-6 offset-3 my-5">

	<form method="post" action="login.php">
		<h2>LOGIN</h2>
		<?php 
		if (isset($_GET['error'])) {
		 ?>
		<div class="alert alert-danger" role="alert">
			<?php
			echo "Message: ".$_GET['error'];
			?>
        </div>
        <?php 
    	}
		 ?>
        
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">keep me login</label>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
  <a class="align-items-end" href="register_form.php">create account</a>
</form>

</div>
</div>
</body>
</html>