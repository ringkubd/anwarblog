<?php
namespace Anwarblog\Helpers;

use Anwarblog\Routing\Route;

if (!class_exists('Route')) {
	return $route = new Route();
}

if (!function_exists('anwar')) {
	function anwar() {
		echo 'string';
	}
}