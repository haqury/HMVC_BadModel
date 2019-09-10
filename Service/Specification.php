<?php
namespace Service;
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 5:34
 */
interface Specification
{
	/**
	 * проверка спецификации
	 * @return mixed
	 */
	public function isSatisfiedBy();
}