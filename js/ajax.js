// JavaScript Document
$(document).ready(function(){


	$(".cta1").click(function(){
		
	var name=$("#email").val();
	var password=$("#password").val();

	
	  
	if(name=="" || password=="" ){
	    $("#comment_valid").html("يجب ادخال اسم المستخدم وكلمه المرور");
		return false;
		}
		
		if(name.length>20){
			$("#comment_valid").html("يجب ان لا يزيد الاسم عن 20 حرف");
		return false;
			}
		
		if(email.length>100){
			$("#comment_valid").html("يجب ان لا يزيد الايميل عن 100 حرف");
		return false;
			}
		


			
			
	//$.post(base_url+"site/login_user_valied/" ,{ username : name , password : password }, function(data){

           
		//	});
			$("#email").val("");
		    $("#password").val("");
		   
			$("#comment_valid").html("");
		return false;
			
		
		});

	
		
		
		
});
	
		