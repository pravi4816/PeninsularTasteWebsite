<?php
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$msg = $_REQUEST['msg'];

if(empty($name) || empty($phone) || empty($msg))
{
	echo "Please fill all the details";
}
else {
	mail("pravi4816@gmail.com","Peninsular_customer", $msg, "From: $name <$email>");
	echo "<script type='text/javascript'>alert('Thanks for you feedback. we will contact you soon');
		window.history.log(-1);
		</script>";
}
?>
