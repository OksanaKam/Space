<?php

// Class PlanetsController

require ROOT . '/models/Planet.php';

class PlanetController
{

	public function actionIndex(){

		// получаем данные из БД
		$planetsList = Planet::getPlanetsList();

		require ROOT . '/views/planet/planet_detail.php';

		return true;
	}


	// метод для отображения одной планеты по id

	public function actionView($id){

		if ($id) {
			$planetsItem = Planet::getPlanetsItemById($id);
			require ROOT . '/views/planet/planet_detail.php';
		}

		return true;
	}
}