<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Welcome::<?php echo $_SESSION['login']?>::</h1>
	<a href="logout.php">Logout</a>

</body>
</html>