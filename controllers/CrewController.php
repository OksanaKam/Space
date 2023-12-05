<?php

require ROOT . '/models/Crew.php';

class CrewController {

	public function actionIndex(){

		// получаем данные из БД
		$crewList = Crew::getCrewList();

		require ROOT . '/views/crew/crew.php';

		return true;
	}

	public function actionView($id){
		if ($id) {
			$crewItem = Crew::getCrewItemById($id);
			require ROOT . '/views/crew/crew.php';
		}

		return true;
	}
}