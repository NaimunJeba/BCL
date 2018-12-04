<?php include 'server.php';?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
  .header {
  width: 38%;
  margin: 40px auto 0px;
  color:red;
  background: white;
  text-align: center;
  border: 1px solid white;
  border-bottom:1px;
  border-radius: 10px 10px 10px 10px;
  padding: 10px;

}
.body{
  font-size-base: 0.875rem
}
footer {
      background-color: #555;
      color: white;
      font-size: small;
    }

  .placeicon{
    font-family: fontawesome;
  }


</style>
</head>
<body>
<div  class="container-fluid" style="background-color: black; font-size: 12px; width:100%; height: 550px;">
<img src="logo-short.png" class="img-fluid rounded mx-auto d-block">
 <div class="centered">
      <div class="header">
        <form method="POST" action="login.php">
          <?php include 'errors.php';?>
              <div class="form-group">
              <!-- <label for="exampleInputEmail1">Email address</label> -->
              <div class="placeicon">
              <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="&#xf007; Email" >
            </div>
            </div>

          <div class="form-group">

          <!--  < label for="exampleInputPassword1">Password</label> -->
            <div class="placeicon">
            <input type="password"  name="password" class="form-control" id="exampleInputPassword1"
            placeholder="&#xf023; Password">
          </div>
           </div>
           <div class="placeicon">
          <div class="clearfix">
      <button type="submit" name="login" class="btn btn-danger btn-sm pull-right">Login &#xf0a9;</button>
    </div>
    </div>
    <p><u>Not yet  a member?</u> <a href="register.php">Sign up</a></p>
    </form>
     </div>
  </div>

    </body>
  </div>
  <footer class="container-fluid text-center col-md-12">
  <p>&copy; Bashundhara Group. All right reserved</p>
   </footer>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
