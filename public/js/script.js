// get the data from database and show in table
$(function(){
	lode_data();
    
});

function lode_data(){


	$('.table').html('<tr colspan="7" style="text-align:center"><td><img src="public/image/ajax-loader.gif"></td></tr>');
	$.ajax({
     url:'getdata.php',
     method:'get',
     success:function(response){
       response = $.parseJSON(response);
     	
     	if (response.status=='success') {
     		$('.table').html(response.html);
     	}
     	// console.log(response);


     }



	});
}

// End get the data form database and show in table

// Insert Data in database
$(function(){

	$('.form').on('submit',function(event){
     event.preventDefault();
     $form=$(this);
     	// form validaction
     if (formvalidaction($form)) {

       crudfunction($form);
     }else{
     	console.log('missind field!')

     }
     	// end form validaction


     // console.log(this);
	});

    
});
function crudfunction($form){
	$.ajax({
   url: $form.attr('action'),
   method:$form.attr('method'),
   data:$form.serialize(),

   success:function(response){
   	console.log(response);

   }
	});


}

// 
function formvalidaction($form){
	var inputTaglist=$form.find('input');
	var inputTaglist=$form.find('textarea');
	var inputTaglist=$form.find('select');
	for (var i = 0; i < inputTaglist.length; i++) {
		if (inputTaglist[i].value==''|| inputTaglist[i].value==null ) {
			return false;
		}	
	}
	return true;
	console.log(inputTaglist);
}
// End Insert Data in database
// ---------------------------------------------------------------------------


// get data 
$(function(){
	$('.table').on('click',function(event){
		event.preventDefault();
		// event.target target singal tag
		// var $anchor=$(event.target).parent(".icon");
		// var id= $anchor.attr('data-id');
		// alert(id);
		// if ($anchor.hasClass('icon')) {
           
		// }
		var row_id = $(this).attr('data-id');
		console.log(row_id);
		
	});



});
	function get_data(){

	}


// end get data


