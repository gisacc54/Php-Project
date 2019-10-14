<!DOCTYPE html>
<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="asset/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="asset/jquery-3.4.1.min.js"></script>
</head>
<body>
	
	<div class="container-fluid">
		
<div class="col-md-6 offset-3 my-5">

	<form method="post" action="register.php">
		<h2>REGISTER</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  placeholder="Enter email" name="email" >
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">FirstName</label>
    <input type="text" class="form-control"  placeholder="Enter FirstName" name="fname">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">LastName</label>
    <input type="text" class="form-control"  placeholder="Enter LastName" name="lname">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
<<<<<<< HEAD
  <a class="col-md-4 offset-4" href="login_form.php">if you have an account? login here</a>
=======
  <a class="float-right text-decoration-none" href="login_form.php">Do you have account? login here</a>
>>>>>>> b8e9877fc27646edfe07e0cb32f7d72f2428f2da
</form>

</div>
</div>
</body>
</html>