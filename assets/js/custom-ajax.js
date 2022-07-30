$(document).ready(function(){

	  $("#contact").validate({
	  rules: {
		  name: {
			  required: true
		  },
		   phone: {
			  required: true
		  },
		  email: {
			  required: true,
			  email: true
		  },
		  message: {
			  required: true
		  }
	  },
	   submitHandler: function(form,e) {
				  e.preventDefault();
				  //Billing Deatils
				  var name= $('#name').val();
				  var phone= $('#phone').val();
				  var email= $('#email').val();
				  var subject= $('#subject').val();
				  var message= $('#message').val();
				 
				  //Card details
				  
				  $.ajax({
					   url : 'submit/fgfgfd-ajax.php',
					   type : 'POST',
						data: {
							  name:name,
							  phone:phone,
							  email:email,
							  subject:subject,
							  message:message,
							  action:'contact_form_sgfubmit'   
					  },
					   beforeSend: function () {
						$(".orange-button").attr("disabled", true);
						$(".responce-loader").show();
					 },
					   success : function (response) {
						   $('.order_submit_responce').html(response);
						   $(".orange-button").attr("disabled", false);
						   $(".responce-loader").hide();
					   },
					 });
					 
				   return false;
	   }
	  }); 
	   
	   
	
	
	   //Submit login_form start 
    $("#login_form").validate({
        rules: {
            password: "required",
            email: {
                required: true,
                email: true,
            },
        }, 
        messages: {
              //firstname: "Please enter your firstname",
        }
    })
    $('#login_form').submit(function(e) {
        e.preventDefault();
        if ($('#login_form').valid()) {
            $('.submit-disable').attr("disabled", true);
            $.post("submit/login-submit.php?" + $("#login_form").serialize(), {}, function(response) {
                //console.log(response);
                $('.login_form_responce').html(response);
                $('.submit-disable').attr("disabled", false);
            });
            return false 
        } 
    });
	}); 
    //Submit login_form end