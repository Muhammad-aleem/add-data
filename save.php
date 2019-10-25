<?php

     $connection=mysqli_connect('localhost','root','','ajax');
    if (!$connection) {
     		echo "Oops  Connection failed!";
     	}
     
      

    if (isset($_FILES['imageuplode']['name']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['optionname'])  && isset($_POST['radioclass'])) {
    	
      $name=$_POST['name'];
      $email=$_POST['email'];
      $optionname=$_POST['optionname'];
      $radioclass=$_POST['radioclass'];
      $img_name=$_FILES['imageuplode']['name'];
	  $tmp_name=$_FILES['imageuplode']['tmp_name'];
	  $store="image/";
	  $allow_ext=array("png","jpg");
	  $exp=explode('.', $img_name);
	  $end=end($exp);
	   if (in_array($end,$allow_ext)) {
		move_uploaded_file($tmp_name,"$store/$img_name");
    echo   $query="INSERT INTO `crud`(`name`, `email`,`image`,`optionname`,`radioclass`) VALUES ('$name','$email','$img_name','$optionname','$radioclass')";
      mysqli_query($connection,$query);
	}
	else{
		echo "Sorry";
	}
  }

    	$query="SELECT * FROM `crud`";
    	$result=mysqli_query($connection,$query);
    	$html='';
	    $html.='';
	    $html.='<thead>';
	   	$html.='<tr>';
	   	$html.='<th>#</th>';
	   	$html.='<th>Name</th>';
	   	$html.='<th>Email</th>';
	   	$html.='<th>Option</th>';
	   	$html.='<th>Image</th>';
	   	$html.='<th>Radio</th>';
	   	$html.='<th colspan="2">Action</th>';
	   	$html.='</tr>';
	   $html.='</thead>';
	   if (mysqli_num_rows($result)) {
	   	 	while ($row=mysqli_fetch_assoc($result)) {
	   	 		$html.='<tr>';
	   	 		$html.='<td>'.$row['crud_id'].'</td>';
	   	 		$html.='<td>'.$row['name'].'</td>';
	   	 		$html.='<td>'.$row['email'].'</td>';
	   	 		$html.='<td>'.$row['optionname'].'</td>';
	   	 		$html.='<td><img style="height:50px" src="image/'.$row['image'].'"></td>';
	   	 		$html.='<td>'.$row['radioclass'].'</td>';
	   	 		$html.='<td><a class="icon delete" data-id="'.$row['crud_id'].'"><i class="glyphicon glyphicon-trash"></i></a>';
 	            $html.='<td><a  class="icon editclass" id="'.$row['crud_id'].'" data-toggle="modal" data-target="#exampleModal"><i class="glyphicon glyphicon-edit"></i></a>
 	                  </td>';
	   	 		$html.='</tr>';
	   	 	}
	   	 	echo json_encode(['status'=>'success','html'=>$html]);
	   }else{
	   	$html.='<tr colspan="">';
	   	$html.='<td>No recourd Found!</td>';
	   	$html.='</tr>';
	   	echo json_encode(['status'=>'success','html'=>$html]);
	   }
    // }





	   if (isset($_POST['crud_id'])) {
	  echo 	$query="SELECT * FROM `crud` WHERE id='".$_POST['crud_id']."'"; die();
	   	$result=mysqli_query($connection,$query);
	   	$row=mysqli_fetch_array($result);
	   	echo json_encode($row);
	   }
  // ============== Delete Data ==============
	   if (isset($_POST['id'])) {
      $id=$_POST['id'];
      // echo $userid ;
      $Delete="DELETE FROM `crud` WHERE crud_id='$id'";
 	mysqli_query($connection,$Delete);
	   }
  // ============== End Delete Data ==============








    


  


?>