<?php
			
	function msg_std($mob,$names)
	{
		$user = "belgaumbasket";
		$apikey = "lgfx8yFWCbguffGWYjjl"; 
		$senderid  =  "BMBSKT";
		
		$mobile  =  $mob; 
		$message   =  "Hello, ".$names; 
		$message = urlencode($message);

		$type   =  "txt";

		$ch = curl_init("http://smshorizon.co.in/api/sendsms.php?user=".$user."&apikey=".$apikey."&mobile=".$mobile."&senderid=".$senderid."&message=".$message."&type=".$type.""); 
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$output = curl_exec($ch);      
			curl_close($ch); 
	}

?>
