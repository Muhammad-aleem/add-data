<?php
include('connection.php');
    class Loginclass extends Database

    {
        public 	function singnupdata($name,$email,$phone,$password){
    	  	$sql="INSERT INTO `signin`(`name`, `email`, `phone`, `password`) 
    		VALUES ('$name','$email','$phone','$password')";
    		$query=$this->db->prepare($sql);
 			$query->execute();
 			$result=$query->fetch(PDO::FETCH_ASSOC);
    	}

     public function logindata($name,$password){
     	    $obj="SELECT * FROM `signin` WHERE name='$name' AND `password`='$password'";
     		$query=$this->db->prepare($obj);
 			$query->execute();
 			$result=$query->fetch(PDO::FETCH_ASSOC);
 			$row = $query->rowCount();
 			if($row>0)
 			{
 				session_start();
 				$_SESSION['login'] = $result['name'];
 				header("Location:index.php");
 				exit;
 			}
 			else
 			{
 				return false;
 			}


     }
      


    	
    	
    }


?>