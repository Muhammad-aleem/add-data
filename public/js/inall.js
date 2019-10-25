$(function(){
   // console.log('ok');
    insertall();
});
function insertall(){
   $('#sub').on('click',function(){
   var name=$('#name').val();
  var  email=$('#email').val();
  var image =$('#uplodeimage').val();
  // console.log(name,email,image);
  $.ajax({
  	url:'inallbackend.php',
  	type:'POST',
  	data:new FormData($('#formid')[0]),
    contentType: false, 
    processData: false,
    success:function(result){
      $('#name').val('');
      $('#email').val('');
      $('#uplodeimage').val('');

    	console.log(result);
    }
  });
});
}
function show_alldata(){
	$('.table').html('<tr colspan="7" style="text-align:center"><td><img src="public/image/ajax-loader.gif"></td></tr>');
	$.ajax({ 
		url:'inall.php',
		 method:'get',
		 success:function(response,result){
		 	response = $.parseJSON(response);
		 	console.log(result);

		 	if (response.status=='success') {
     		$('.table').html(response.html);
     	}
		 }


	});

}