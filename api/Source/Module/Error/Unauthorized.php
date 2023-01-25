<?php
	
	header("HTTP/1.1 401");

	echo json_encode(["RESPONSE"	=> "Unauthorized"]);