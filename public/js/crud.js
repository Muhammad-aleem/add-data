$(function(){
insertdata();
getAlldata();

});
function insertdata(){
 $('#sub').on('click',function(){
 	var name=$('#name').val();
 	var email=$('#email').val();
 	var optionname=$('#optionname').val();
 	var imageuplode=$('#imageuplode').val();
 	var radioclass=[];
 	$(".radioclass").each(function() {
				if ($(this).is(':checked')) {
					radioclass.push($(this).val());
				}
			});
			radioclass = radioclass.toString();
			// console.log(name,email,optionname,uplodeimage,radioclass);
			 if (name!='' && email!='' && optionname!='' && imageuplode!='' && radioclass!='') {
              $.ajax({
				url:'save.php',
				type:'POST',
  	           data:new FormData($('#myformid')[0]),
                contentType: false, 
                processData: false,
                success:function(response,result){
                	getAlldata();
                	$('#saves').html('Data is saved!');
                	$('#name').val('');
                	$('#email').val('');
                	$('#optionname').val('');
                	$('#imageuplode').val('');
                	$('.radioclass').val('');
                }
			});
			}else{
				alert('Please fill all the field !');
			}
 });
}
function getAlldata(){
	$('.table').html('<tr colspan="7" style="text-align:center"><td><img src="public/image/ajax-loader.gif"></td></tr>');
	$.ajax({
		url:'save.php',
		 method:'get',
		 success:function(response,result){
		 	response = $.parseJSON(response);
		 	if (response.status=='success') {
     		$('.table').html(response.html);
     	}
		 }
	});
}
// ============================ Delete===================================

$(document).on("click", ".delete", function() { 
		$.ajax({
			url: "save.php",
			type: "POST",
			cache: false,
			data:{
				id: $(this).attr("data-id")
			},
			success: function(dataResult ,response){
			getAlldata();	
			}
		});
	});
 // ---------------------------------------------
 function editfun(crud_id){
   $('#update_hidden').val(crud_id);
   $.post(
    "save.php",
    {
  crud_id:crud_id
    },function(data,status){
       var user=JSON.parse(data);
       $('#update_name').val(user.name); 
       $('#update_email').val(user.email); 
       $('#update_optionname').val(user.optionname); 
       $('#update_imageuplode').val(user.image); 
       $('#update_radioclass').val(user.radioclass); 
    }
    );
   $('#exampleModalLabel').modal('show');
 }





$(function(){
	$(document).on('click','.editclass',function(){
      var crud_id=$(this).attr('id');
      $.ajax({
      	url:'save.php',
      	method:'POST',
      	data:{
      		crud_id:crud_id},
      	dataType:'json',
      	cuccess:function(data,result,response){
      		console.log(response);
       $('#update_name').val(data.name);
       $('#update_email').val(data.email);
       $('#update_optionname').val(data.optionname);
       $('#update_imageuplode').val(data.image);
       $('#update_radioclass').val(data.radioclass);;
       $('#update_hidden').val(data.id);
       $('#exampleModal').modal('show');


      	}

      });
	});

});





// ============= End =======================


//====== Edit ==================

// function editdata(editid){
// 	$('#update_hidden').val(editid);
// 	$.post(
//            'save.php',
//     {
//     	editid:editid
//     },function(data,status){
//     	 var user=JSON.parse(data);
//     	$('#update_name').val(user.name); // user is variable and . name database  name
//     	$('#update_email').val(user.email);
//     	$('#update_optionname').val(user.optionname);
//     	$('#update_imageuplode').val(user.image);
//     	$('.update_radioclass').val(user.radioclass); 
    	
//     }

//     );
// }
// function Editdata(id){
// 	$('#update_hidden').val(id);
	

//     $.post(
//     	'save.php',
//     {
//     	id:id
//     },function(data,status){
//   var user=JSON.parse(data);
//   // console.log(user);
//    $('#update_name').val(user.name);
//    $('#update_email').val(user.email);
//    $('#update_optionname').val(user.optionname);
//    $('#update_imageuplode').val(user.image);
//    $('.update_radioclass').val(user.radioclass);
//     }


//     	);

// }
// function updatedata(){
// 	var update_name=$('#update_name').val();
//     var update_email= $('#update_email').val();
//     var update_optionname=$('#update_optionname').val();
//     var update_imageuplode=$('#update_imageuplode').val();
//     var update_radioclass=$('.update_radioclass').val();
//     var hidden_user_id=$('#update_hidden').val();

//     $.post('save.php',
//     {
//     	update_name:update_name,
//     	update_email:update_email,
//     	update_optionname:update_optionname,
//     	update_imageuplode:update_imageuplode,
//     	update_radioclass:update_radioclass,
//     	hidden_user_id:hidden_user_id,	
//     },function(data,status){
//     	$('#myModal').modal("hide");
    	

//     }
//     );

// }

// ----------------------- Edit setion 
// $(function(){
//   $('.table').on('click',function(event){
//     event.preventDefault();
//     $anchor=$(event.target).parent('.icon');
//     var id =$anchor.attr('data-id');
//     if ($anchor.hasClass('icon')) {

//          getrecoured($anchor.attr('id'),id);
//        console.log(id);

//     }
   

//   });

// });
//  get singel data

// function getrecoured(actionName,id){
//   $.ajax({
//     url:'get_recpred_edit_part.php',
//     method:'POST',
//     data:{id:id},
//     success:function(){

//     }

//   });

// }
// -------------------------- end