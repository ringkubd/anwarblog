<?php
namespace Anwarblog\Routing;
/**
 * summary
 */
class Route {

	private $applicationpath;

	public static get($name,$controller){
		return file_exists($controller);
	}
}