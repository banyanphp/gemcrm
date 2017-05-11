
function deletetarget(id){
 var result= confirm ("Are you sure for complete the target year?");
	 //alert(id);
	 if(result)
	 {
		// alert('sss');
		  $.ajax({
                    type: "POST",
                    url: 'target_delete.php',
                    data: {
            id: id,
            
        },
		 success: function(data)
    {   
    alert(data);
   // alert("Category is Updated Successfully");    
           
    location.reload();
    },
		
                   
                });
		
	 }
	 
	
}
