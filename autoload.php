<?php
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 0:47
 */

function __autoload($classname)
{
	$filename = __DIR__ . '/' . str_replace('\\', '/', $classname) .".php";
	include_once($filename);
}