<?php
// echo "server:".time();
// print_r($_GET);
if (!empty($_GET['checkusername'])) {
	$checkusername=$_GET['checkusername'];
	//   connection with database
	 $connection=mysqli_connect('localhost','root','','new_login');
    if (!$connection) {
     		echo "Oops  Connection failed!";
     	}



     	$query="SELECT * FROM `signin` WHERE name='$checkusername'";
     	$result=mysqli_query($connection,$query);
     	if (mysqli_num_rows($result)) {
     		$row=mysqli_fetch_assoc($result);
     		echo json_encode(['status'=>'success']);
     	}else{
     		echo json_encode(['status'=>'error']);
     	}



}


?>