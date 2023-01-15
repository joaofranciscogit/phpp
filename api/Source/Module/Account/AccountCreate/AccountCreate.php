<?php

	require_once './Source/Config/Lib.php';

	define('DATA',
	[

		'ACCESS'	=> 'PUBLIC',
		'MODULE'	=> null,
		'AUTH'		=> false,
		'TITLE'		=> 'Loren Ipsum',
		'META'		=> 
		[
			'INDEX'         => true,
			'DESCRIPTION'	=> null,
			'KEYWORDS'		=> null,
			'IMAGE'			=> null,
			'AUTHOR'		=> PROJECT['AUTHOR']
		]
	]);

	echo '200';