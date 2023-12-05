<?php

require ROOT . '/models/Technology.php';

class TechnologyController {

	public function actionIndex(){

		// получаем данные из БД
		$techList = Technology::getTechList();

		require ROOT . '/views/technology/technology.php';

		return true;
	}

	public function actionView($id){
		$techList = Technology::getTechList();
		if ($id) {
			$techItem = Technology::getTechItemById($id);
			require ROOT . '/views/technology/technology.php';
		}

		return true;
	}
}