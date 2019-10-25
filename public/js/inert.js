$(function(){
 submitdata();
 alldata();
});
function submitdata(){
 $('#sub').on('click',function(){
    var name=$('#name').val();
    var lname=$('#lname').val();
    var email=$('#email').val();
     // console.log(name,lname,email);

     if (name==""|| lname==""|| email=='') {
     	$('#fill').html('Opps Sory All felid is requried!');
     }else{
    $.ajax({
       url:'insert.php',
       type:'post',
       data:'name='+name+'&lname='+lname+'&email='+email+'&submit='+1,
       // data:{
       // 	   name:name,
       // 	   lname:lname,
       // 	   email:email
       // },
       success:function(result,response){
       	console.log(response);
       	$('#saved').html('Welcome!  Your data successfully saved!');
       	var name=$('#name').val('');
        var lname=$('#lname').val('');
        var email=$('#email').val('');
         alldata();

       }
    });
    }
 });

}
// ----------------------------------=====----------------------------
//  get_all data_with ajax
function alldata(){
	$('.table').html('<tr colspan="7" style="text-align:center"><td><img src="public/image/ajax-loader.gif"></td></tr>');
	$.ajax({ 
		url:'insertalldata.php',
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