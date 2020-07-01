<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$msg=$_POST['msg'];
		
		$to='pravi4816@gmail.com';
		$subject='Form Submition';
		$message="Name: ".$name."\n"."Phone: ".$phone."\n". "Wrote the following: "."\n\n"."msg";
		$headers="Form: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo"<h1>Sent Successfully..! Thank You"." ".$name.", We will contact you shortly..!</h1>";
		}
		else{
			echo "OOPS..!!! Something went wrong..!";
		}
	}
?>