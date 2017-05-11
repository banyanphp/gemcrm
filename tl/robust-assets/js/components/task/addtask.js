$(function () {

    $("#add_task").click(function () {
      
var data = $("#add_task_form").serialize();
var tname = $("#tname").val();
var user = $("#user").val();
var task = $("#task").val();
  
        if (tname == '')
        {
            $('#errors').html('Enter Task Name');
            $("#tname").focus();

            return false;
        }
          if (user == '0')
        {
            $('#errors').html('Please select user');
            $("#user").focus();

            return false;
        }
     
if (task == '')
        {
            $('#errors').html('Enter Task description');
            $("#task").focus();

            return false;
        }
	
		
        else{
        
$.ajax({
type : 'POST',
url : 'add_task_process.php',
     data:data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Task Created successfully!");
  }
  else{
$("#errors").html("Error Occured Please Contact Your Service Provider");
  }
 setTimeout(function () {
                            $('#success').html('');
                        }, 5000);
						
						
						 setTimeout(function () {
                            $('#errors1').html('');
                        }, 5000);


}
});
}
return false;
});
});

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


 