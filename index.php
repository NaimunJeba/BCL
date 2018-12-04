<?php include 'server.php';?>
<!DOCTYPE html>
<html>
<html>
<head>
    <title>User registration system PHP and MySQL</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
.head{

    background-color: white;
}

</style>
</head>
<body>
    <div class="container-fluid ">
     <div class="head">

        <img src="group-logo.png" class="img-fluid">

    </div>
<!-- if no session found :
    THEN REDIRECT TO LOGIN.PHP -->
         <?php if (!isset($_SESSION['username'])): ?>
            <?php

header("Location:login.php");
exit();
?>
    <?php endif;?>



    <div class="header">
        <h2>Home page</h2>

    </div>

    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
            <div>
                <h3>

<!-- //echo $_SESSION['success']; -->
                    <div class="alert alert-success" role="alert">
                    <strong>WelCOME!</strong> You are successfully Logged in.
                    </div>
                     <?php
unset($_SESSION['success']);
?>
                </h3>
            </div>

        <?php endif;?>

        <?php if (isset($_SESSION['username'])): ?>

                <strong><?php echo $_SESSION['username']; ?></strong>

            <p class="font-weight-bold text-danger"><a href="index.php?logout='1'">Logout</a></p>

        <?php endif;?>
    </div>
</div>

</body>
</html>