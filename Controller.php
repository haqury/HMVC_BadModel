<?php
/**
 * Created by PhpStorm.
 * User: haqury
 * Date: 03.09.19
 * Time: 0:24
 */


abstract class Controller
{
	protected $output = [];
	protected $template = 'View/empty.php';


	/**
	 * @param $name
	 * @param $arguments
	 */
	public static function __callStatic($name, $arguments)
	{
		$nameAction = $name . 'Action';
		$contoroller = new static;
		$contoroller->setTemplate('View/' . str_replace('\\', '/', get_class($contoroller)) . '/' . $name . '.php');
		$contoroller->$nameAction($arguments);
		return $contoroller->returnView();
	}

	/**
	 * вывод результата на экран
	 */
	public function returnView()
	{
		if (!empty($this->output)) {
			foreach ($this->output as $key => $param) {
				$$key = $param;
			}
		}
		include $this->template;
	}

	/**
	 * дописываем переменные вывода
	 * @param array $date
	 */
	public function setOutput($date)
	{
		$this->output = array_merge($this->output, $date);
	}

	/**
	 * задает шаблон отображения
	 * @param string $template
	 */
	public function setTemplate($template)
	{
		$this->template = $template;
	}
}