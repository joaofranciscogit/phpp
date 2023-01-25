<?php

	require_once './Source/Config/Lib.php';

	define("DATA",
	[
		"AUTHORIZED_METHOD"	=> "POST",
		"ACCESS"			=> "PUBLIC",
		"REQUEST_METHOD" 	=> $_SERVER["REQUEST_METHOD"],
		"KEY"				=> null,
		"JSON" 				=> json_decode(file_get_contents("php://input")),
		"TOKEN"				=> null
	]);

	$searchKey = DATA['JSON']->searchKey;

	if (DATA['AUTHORIZED_METHOD'] == DATA['REQUEST_METHOD'])
	{
		$postSearch = $useMysql->mysqlExe("SELECT *FROM post INNER JOIN post_type ON post_type.post_type_id = post.post_type_id WHERE post_title LIKE '%".$searchKey."%' OR post_type_name LIKE '%".$searchKey."%' OR post_detail LIKE '%".$searchKey."%'");

		echo json_encode($postSearch);
	}

	else
	{
		header("HTTP/1.1 400");

		echo json_encode(["RESPONSE"	=> "Unauthorized Method"]);
	}