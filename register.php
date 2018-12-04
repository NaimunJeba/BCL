<?php include 'server.php';?>
<!DOCTYPE html>
<html>
<head>
	<title>User registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div  class="container-fluid">
	<h2 class="text-xl-center font-weight-bold">Registration</h2>
	<form method="POST" action="register.php">
			<?php include 'errors.php';?>
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password_1" class="form-control">
			</div>
			<div class="form-group">
				<label>Confirm Password</label>
				<input type="password" name="password_2" class="form-control">
			</div>
			<div class="form-group">
				<div class="clearfix">
				<button type="submit" name="register" class="btn btn-danger btn-sm pull-right">Register</button>
			</div>

		<p><u>Alrady a member?</u> <a href="login.php">Sign in</a></p>

	</form>

</div>

</body>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
