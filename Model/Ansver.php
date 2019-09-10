<?php
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 0:20
 */

namespace Model;


class Ansver extends \Model
{
	public $id;

	public $Quest__id;

	public $weight;

	public $text;

	public $profile;

	public static $table = [
		[
			'id'		=> 0,
			'Quest__id' => 0,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Люблю',
		], [
			'id'		=> 1,
			'Quest__id' => 0,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Думаю только об этом, не могу спать.',
		], [
			'id'		=> 2,
			'Quest__id' => 0,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Нет.',
		], [
			'id'		=> 3,
			'Quest__id' => 1,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Очень люблю вкусно поесть.',
		], [
			'id'		=> 4,
			'Quest__id' => 1,
			'weight' 	=> 1,
			'text' 		=> 'Отношусь спокойно.',
		], [
			'id'		=> 5,
			'Quest__id' => 1,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Я - дизайнер блюд в ресторане.',
		], [
			'id'		=> 6,
			'Quest__id' => 2,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Нет',
		], [
			'id'		=> 7,
			'Quest__id' => 2,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Да',
		], [
			'id'		=> 8,
			'Quest__id' => 2,
			'weight' 	=> 1,
			'profile'   => 0,
			'text' 		=> 'Наверное',
		],
	];
}