<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-3">
				<div class="form-group">
					<input type="text" name="username" class="form-control" id="checkusername" placeholder="Enter----Username-----:">
				</div>
			</div>
			<div class="col-md-3">
				<p id="status"></p>
			</div>
		</div>
	</div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="public/js/jquery-3.4.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function(){
      
     $('#checkusername').on('keyup',function(){
     	// console.log(this);
     	 var checkusername=$(this).val();
     	 var $input=$(this);

     	 if (checkusername) {
     	 	
     	 $.ajax({
     	 	url:'checkusernamefun.php',
     	 	method:'get',
     	 	data:{checkusername:checkusername},
     	 	success:function(response){

                response=$.parseJSON(response);
                if (response.status== 'success') {
                	$input.css('border','solid 2px red');
                	$('#status').text('Sorry! username already taken');

                }else{
                	$input.css('border','solid 2px #50b733');
                	$('#status').text('');

                }

     	 		 console.log(response);

     	 	}

     	 });

     	 }

     });


	});


</script>
</body>
</html>