<?php
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 5:17
 */

namespace Model;


class Profile extends \Model
{
	public $id;

	public $name;

	public $title;

	public static $table = [
		[
			'id' => 0,
			'name' => 'Cook',
			'title' => 'Повар',
		], [
			'id' => 1,
			'name' => 'Gourmet',
			'title' => 'Гурман',
		],
	];
}