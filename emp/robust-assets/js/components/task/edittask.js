$(function () {

    $("#add_task").click(function () {
      
var data = $("#add_task_form").serialize();
var tname = $("#tname").val();
var user = $("#user").val();
var task = $("#task").val();
var report = $("#report").val();
var status = $("#status").val();
  
     
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
	if (report == '')
        {
            $('#errors').html('Enter Task report');
            $("#report").focus();

            return false;
        }
	      if (status == '')
        {
            $('#errors').html('Please select status');
            $("#status").focus();

            return false;
        }
		
        else{
        
$.ajax({
type : 'POST',
url : 'edit_task_process.php',
     data:data,
beforeSend: function(){
$("#errors").html('');

},
success : function(response){
 if(response==1){
$("#success").html("Task Updated successfully!");
  }
  else{
	 
$("#errors").html("Error Occured Please Contact Your Service Provider");
  }
 setTimeout(function () {
                            $('#success').html('');
							
							window.location.href='task_list.php';
                        }, 2000);
						
						
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


 