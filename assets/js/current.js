$(document).ready(function() { 
    $("#myform").submit(function(){
    	var formdata = $("#myform").serialize();
    	$.ajax({
    		url: "myborrowingscript.php",
    		type: "POST",
    		data: formdata,
    		success: function(e){
    			$("$tbl").append("<td>"+e+"</td>");
    		},
    		error: function(){
    			alert("error!");
    		}

    	});
    });
	
}); 