function deleteappointment(id){
 var result= confirm ("Are you sure for delete?");
	 if(result)
	 {
		  $.ajax({
                    type: "POST",
                    url: 'appointmen_delete.php',
                    data: {
            id: id,
            
        },
		 success: function(data)
    {   
    alert(data);
           
    location.reload();
    },
		
                   
                });
		
	 }
	 
	
}
