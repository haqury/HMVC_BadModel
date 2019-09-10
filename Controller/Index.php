<?php
namespace Controller;
use Model\Profile;
use Model\Quest;
use Model\Test;
use Service\Test\TestSpecification;

/**
 * Контроллер страницы теста
 */
class Index extends \Controller
{

	/**
	 * контроллер страницы теста
	 * @param $id
	 */
	public function indexAction($id)
	{
		$this->setOutput(
			[
				'test' => Test::byId(0),
			]
		);
	}

	/**
	 * Контроллер вывода вопроса
	 * @param $params
	 */
	public function questAction($params)
	{
		$this->setOutput(
			[
				'test' => Test::byId($params['id']),
				'quests'   => Quest::getQuestWithAnsver(
					[
						'Test__id' => $params['id'],
					]
				),
			]
		);
	}

	/**
	 * Контроллер обработки результата запроса
	 * @AJAX
	 */
	public function resultAction()
	{
		$profile = Profile::getArray();
		$specification = new TestSpecification();
		$this->setOutput(
			[
				'result' => $specification->getResult($_POST, $profile)
			]
		);
	}
}