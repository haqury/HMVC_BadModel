<?php

namespace Model;


class Quest extends \Model
{
	public $id;

	public $Test__id;

	public $text;

	public $ansver = 0;

	public static $table = [
		0 => [
			'id' 	   => 0,
			'Test__id' => 0,
			'ansver'   => 0,
			'text' 	   => 'Любите ли вы выпекать пироги?',
		],
		1 => [
			'id' 	   => 1,
			'Test__id' => 0,
			'ansver'   => 0,
			'text' 	   => 'Как вы относитесь к еде?',
		],
		2 => [
			'id' 	   => 2,
			'Test__id' => 0,
			'ansver'   => 0,
			'text' 	   => 'Умеете ли вы варить суп?',
		],
	];

	/**
	 * параметры поиска
	 * @param $params
	 */
	public static function getQuestWithAnsver($params)
	{
		$quests = static::getCollection($params);
		/** @var Quest $quest */
		foreach ($quests as $quest) {
			$quest->addAnsver();
		}
		return $quests;
	}

	/**
	 * Добавляет связанные ответы
	 */
	public function addAnsver()
	{
		$this->data['ansvers'] = Ansver::getCollection(
			[
				'Quest__id' => $this->id,
			]
		);
		return $this;
	}
}