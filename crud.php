<?php
 // $connection=mysqli_connect('localhost','root','','ajax');
 //    if (!$connection) {
 //     		echo "Oops  Connection failed!";
 //     	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Curd</title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>


	<h1 class="text-success text-center">Insert data</h1>
  <div class="container" style="padding-top:0px">
  	<div class="row">
  		<div class="col-md-12">
  			<h2 class="text-success text-success" id="saves"></h2>
  		<form enctype="multipart/form-data" method="POST" action="JavaScript:void(0)" id="myformid">
  			<div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name----">
       </div>
       <div class="form-group">
        <label for="name">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Name----">
       </div>
       <div class="form-group">
       	<select class="browser-default custom-select custom-select-lg mb-3" name="optionname" id="optionname">
          <option >Open this select menu</option>
          <option value="Pakistan">Pakistan</option>
          <option value="India">India</option>
          <option value="Japan">Japan</option>
        </select>
       </div>
       <div class="form-group">
        <label for="name">image:</label>
        <input type="file"  name="imageuplode" id="imageuplode">
       </div>
       <label class="radio-inline"><input type="radio" name="radioclass" value="Muslim" class="radioclass">Muslim</label>
       <label class="radio-inline"><input type="radio" name="radioclass" value="Option_1" class="radioclass">Option_1 </label>
       <label class="radio-inline"><input type="radio" name="radioclass" value="option_2" class="radioclass">option_2</label><br><br>
       <div class="form-group">
        <input type="submit" class="btn btn-info " id="sub"  name="submit" value="Submit">
       </div>
  		</form>
  		</div>
  	</div>
  </div>
  <!-- ==================================================================== -->
  <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form enctype="multipart/form-data" method="POST" action="JavaScript:void(0)" id="updatemyformid">
      <div class="modal-body">
       
  			<div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name="update_name" id="update_name" placeholder="Enter Name----">
       </div>
       <div class="form-group">
        <label for="name">Email:</label>
        <input type="email" class="form-control" id="update_email" name="update_email" placeholder="Enter Name----">
       </div>
       <div class="form-group">
       	<select class="browser-default custom-select custom-select-lg mb-3" name="update_optionname" id="update_optionname">
          <option >Open this select menu</option>
          <option value="Pakistan">Pakistan</option>
          <option value="India">India</option>
          <option value="Japan">Japan</option>
        </select>
       </div>
       <div class="form-group">
        <label for="name">image:</label>
        <input type="file"  name="update_imageuplode" id="update_imageuplode">
       </div>
       <label class="radio-inline"><input type="radio" name="update_radioclass" id="update_radioclass" value="Muslim" class="update_radioclass">Muslim</label>
       <label class="radio-inline"><input type="radio" name="update_radioclass" id="update_radioclass" value="Option_1" class="update_radioclass">Option_1 </label>
       <label class="radio-inline"><input type="radio" name="update_radioclass" 
        id="update_radioclass" value="option_2" class="update_radioclass">option_2</label><br><br>
       <!-- <div class="form-group">
        <input type="submit" class="btn btn-info " id="sub"  name="submit" value="Submit">
       </div> -->
  		
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="submit" id="update_btn" onclick="updatedata()" value="Update">
		<input type="hidden" name="update_hidden" id="update_hidden">
      </div>
      </form>
    </div>
  </div>
</div>
  <!-- ====================================================================== -->





  <div class="container" style="padding-top:0px">
  	<div class="row">
  		<div class="col-md-12">
  			<table class="table table-border">
  			</table>
  		</div>
  	</div>
  </div>







<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="public/js/jquery-3.4.1.min.js"></script>
<script src="public/js/crud.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>