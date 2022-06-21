<?php

$name = filter_var($_POST["Name"], FILTER_SANITIZE_STRING);
$email = filter_var($_POST["E-mail"], FILTER_SANITIZE_EMAIL);

$msg = $_POST["Message"];
//$array = array("fuck", "crap", "shit", "hell", "bullshit", "ass", "bs", "poop", "bitch", "slut", "whore", "pimp", "cunt", "cuss");

$ip = $_SERVER['REMOTE_ADDR'];
//$userType = "";

if (isset($_POST["website"]) && $_POST["website"] == "") 
{
	if(!empty($name) && !empty($email) && !empty($msg))
	{
		date_default_timezone_set("Asia/Kolkata");
		$fp = fopen("Feedback_Handeler.csv","a"); 
		$fp1 = file("Feedback_Handeler.csv");
	    if($fp)
	    {

	    	$cvsData = $ip . "," . date("d/m/Y") . "," . date("h:i:sa") . "," . $name . "," . $email . "," . $msg . "\n";
	    	fwrite($fp,$cvsData);
	    	echo "Your Message is delivered.";
	        fclose($fp); // Close the file
	    } 
	}
	else
	{
		echo "Empty form";
	}
}
else
{
	http_response_code(400);
}

?>