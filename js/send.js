$(document).ready(function() {

	//form submission:
	$("#submit").click(function(){
		return false;
	});
	
	$("#submit").click(function(){					   				   
		$(".error").hide();

		var hasError = false;
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		

		var award1 = $("#award1").val();
		var award2 = $("#award2").val();
		var award3 = $("#award3").val();
		var award4 = $("#award4").val();
		var award5 = $("#award5").val();
		var award6 = $("#award6").val();
		var award7 = $("#award7").val();
		var award8 = $("#award8").val();
		var award9 = $("#award9").val();
		var award10 = $("#award10").val();

		// console.log(fitnessVal);
		//validation
		if(award1 == '') {
			$("#award1").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}

		if(award2 == '') {
			$("#award2").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}

		if(award3 == '') {
			$("#award3").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}

		if(award4 == '') {
			$("#award4").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}

		if(award5 == '') {
			$("#award5").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}

		if(award6 == '') {
			$("#award6").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}

		if(award7 == '') {
			$("#award7").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}


		if(award8 == '') {
			$("#award8").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}


		if(award9 == '') {
			$("#award9").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}														

		if(award10 == '') {
			$("#award10").before('<p class="error">Forgot this one...</p>');
			hasError = true;
		}	


					
		if(hasError == false) {
			//$(this).hide();
			//$("#sendEmail li.buttons").append('<img src="img/loading.gif" alt="Loading" id="loading" />');
			$(this).hide();


			$.post("send.php",
   				{ award1: award1,
   				  award2: award2,
   				  award3: award3,
   				  award4: award4,
   				  award5: award5,
   				  award6: award6,
   				  award7: award7,
   				  award8: award8,
   				  award9: award9,
   				  award10: award10
   				  
   				},
   					function(data){
   	
   						$("#regform").hide();
   						$("#regform").after("<h3>Thank You</h3><p>Your votes have been received.</p>");											
   						
										  												
						
   					}
				 );
		}			
		
		return false;
	});

});	