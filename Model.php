<?php

/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 0:20
 */
abstract class Model
{
	private $model;
	public $collection;
	public $data;

	public static $noIndexes = [
		'table',
		'model',
		'collection',
		'data',
		'noIndexes',
	];

	public function __set($name, $value)
	{
		if (!isset($this->$name)) {
			return false;
		}
		$this->$name = $value;
		return true;
	}

	public function __get($name)
	{
		if (!isset($this->$name)) {
			return false;
		}
		return $this->$name;
	}

	public function __construct($fields)
	{
		$modelFields = $this->getFields();
		foreach ($modelFields as $key => $modelField) {
			$this->$key = $fields[$key];
		}
	}

	/**
	 * @param $id
	 * @return static
	 */
	public static function byId($id)
	{
		$collection = static::getCollection(
			[
				'id' => $id,
			]
		);
		return $collection[0];
	}

	/**
	 * Возвращает коллекцию моделей
	 * @param array $searchParams
	 * @return array|bool|null
	 */
	public function getCollection($searchParams = [])
	{
		$table = static::getArray($searchParams);
		foreach ($table as &$item) {
			$item = new static($item);
		}
		return $table;
	}

	/**
	 * Возвращает коллекцию массив
	 * @param array $searchParams
	 * @return array|bool|null
	 */
	public function getArray($searchParams = [])
	{
		$table = static::getTable();
		if (array_diff_key($searchParams, static::getFields())) {
			return null;
		}
		if(!empty($searchParams)){
			$table = static::searchInTable($searchParams, $table);
		}
		return $table;
	}

	/**
	 * создает модель
	 * @param $searchParams
	 * @return mixed
	 */
	public function getModel($searchParams)
	{
		return static::getCollection($searchParams)[0];
	}

	/**
	 * возвращает таблицу модели
	 * @return bool
	 */
	public function getTable()
	{
		return static::$table;
	}

	/**
	 * возвращает поля модели
	 * @return array
	 */
	private function getFields()
	{
		$modelFields = get_class_vars(static::class);
		foreach (static::$noIndexes as $noIndex) {
			unset($modelFields[$noIndex]);
		}
		return $modelFields;
	}

	/**
	 * @param $searchParams
	 * @param $table
	 * @return array|null
	 */
	public function searchInTable($searchParams, $table)
	{
		var_dump($searchParams);
		foreach ($searchParams as $key => $searchParam) {
			$searchParam = is_array($searchParam)
				? $searchParam
				: [$searchParam];
			$table = array_filter(
				$table,
				function ($table) use ($key, $searchParam) {
					return array_intersect($searchParam, [$table[$key]]);
				}
			);
		}
		return $table;
	}
}