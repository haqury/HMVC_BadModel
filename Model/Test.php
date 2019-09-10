<?php
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 0:44
 */

namespace Model;


class Test extends \Model
{
	public $id;

	public $title;

	public static $table = [
		0 => [
			'id' 	=> 0,
			'title' => 'Пример теста',
		],
	];
}