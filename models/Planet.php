<?php

class Planet {

	// Получение списка планет

	public static function getPlanetsList() {

		$pdo = DBconnect::getConnection();

		$query = "SELECT planet_id, planet_title, planet_text, distance, time, planet_img
                  FROM planets;";

		return $pdo->query($query)->fetchAll();
	}

	// Получение одной планеты по id

	public static function getPlanetsItemById($id) {

		$id = (int)$id;

		if ($id) {
			$pdo = DBconnect::getConnection();
			$query = "SELECT planet_id, planet_title, planet_text, distance, time, planet_img
                    FROM planets
				    WHERE planet_id = ?;";

            $res = $pdo->prepare($query);
            $res->execute([$id]);
			$planetsItem = $res->fetch();

			return $planetsItem;
		}

	}

}