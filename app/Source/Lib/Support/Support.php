<?php

	namespace Autoload\Lib\Support;

	class Support
	{
		public function activeLink($routeNav, $routeNow){
			if ($routeNav === $routeNow) {
				return 'active';
			}
		}	
	}