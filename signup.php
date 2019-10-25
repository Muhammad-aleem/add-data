<?php
include('classes/loginclass.php');
$obj=new Loginclass;
session_start();

if (isset($_POST['submit'])) {
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];
    // $EncryptPassword = md5($password);
    $save=$obj->singnupdata($name,$email,$phone,$password);
    header('location:login.php');


    if ($save===true) {

    $_SESSION['message']='<p  style="color:green;text-align:center;">User Resgister successfully saved </p >';

  }

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
      <div class="col-md-12">
    <?php
 if (isset($_SESSION['message'])) {
     echo $_SESSION['message'];
 }
  ?> 
  </div>
			<div class="col-md-12">
				<h1 class="text-success text-center">Signup</h1>
				<form method="POST" action="signup.php">
					 <div class="form-group">
                       <label for="name">Name:</label>
                       <input type="text" class="form-control" id="email" name="name" placeholder="Enter Name----">
                     </div>
                      <div class="form-group">
                       <label for="name">Email:</label>
                       <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email----">
                     </div>
                      <div class="form-group">
                       <label for="name">phone:</label>
                       <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone----">
                     </div>
                      <div class="form-group">
                       <label for="name">Password:</label>
                       <input type="password" class="form-control" id="password" name="password" placeholder="********">
                     </div>
                     <div class="form-group">
                          <input type="submit"  class=" btn btn-info btn-lg" name="submit" value="Signup" >
                          <!-- <a href="#" class="btn btn-success" type="submit" name="submit" >Signup</a> -->
                     </div>
					
				</form>
			</div>
		</div>
	</div>

</body>
</html>