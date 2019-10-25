<?php
include('classes/loginclass.php');
$obj=new Loginclass;

if (isset($_POST['submit'])) {
    $name=$_POST['name'];
    $password=$_POST['password'];
    // $EncryptPassword = md5($password);
    $chk=$obj->logindata($name,$password);
    
          if ($chk===false) {

		$_SESSION['alert']='<p  style="color:red;text-align:center;">your Username and password incorrect</p>';

	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
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
                   if (isset($_SESSION['alert'])) {
                      echo $_SESSION['alert'];
                                                  }
	?> 
			</div>
			
			<div class="col-md-12">
				<h1 class="text-success text-center">Login</h1>
				<form method="POST" action="login.php">
					 <div class="form-group">
                       <label for="name">Name:</label>
                       <input type="text" class="form-control" id="email" name="name" placeholder="Enter Name----">
                     </div>
                      <div class="form-group">
                       <label for="name">Password:</label>
                       <input type="password" class="form-control" id="password" name="password" placeholder="********">
                     </div>
                     <div class="form-group">
                          <input type="submit"  class=" btn btn-info btn-lg" name="submit" value="Login" >
                     </div>
					
				</form>
			</div>
           




		</div>
	</div>

</body>
</html>