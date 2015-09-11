<?php
							
		$name = $email = $phone = $experience = $cover_letter = "";
		if( !empty($_POST["name1"]) && !empty($_POST["email1"]) && !empty($_POST["contact1"]) && !empty($_POST["msg1"]) )
		{
			
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
			  $name = test_input($_POST["name1"]);
			  $email = test_input($_POST["email1"]);
			  $phone = test_input($_POST["contact1"]);
			  $cover_letter = test_input($_POST["msg1"]);
			  
				/* $to = "marketting_dave@ucsplgroup.in";									
				$to = "info@bworks.in";*/
				// $mail->addAddress('info@bworks.in');
				
				$to = "info@bworks.in";
				$subject = "Enquiry from Bworks - contact us"; 
				$txt = "Name :" . $name . "\r\n\r\n  <br/>" . "Email :" . $email ." \r\n\r\n  <br/> " . "Phone :" . $phone ." \r\n\r\n  <br/> "  . " Message :" .  $cover_letter  ." \r\n\r\n  <br/> "   ;
				$headers = "MIME-Version: 1.0" . "\r\n";
				$headers .= 'From: '.$email.'';
				
				 $mail_response = mail($to,$subject,$txt,$headers);
			} 
			
			 if($mail_response){    				
					echo " Your mail submitted to our Helpdesk. We will get you soon.";
				} 
				else {
					echo " Issue found in mail send. Please try again.";
				}	
		}
		else{
			echo "Data are invalid";								
		}
		

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}					
						
?>