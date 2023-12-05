<?php

class Crew {

	// Получение списка команды

	public static function getCrewList() {

		$pdo = DBconnect::getConnection();

		$query = "SELECT crew_id, crew_title, crew_name, crew_text, crew_img, crew_class
		          FROM crew;";

		return $pdo->query($query)->fetchAll();

	}

	// Получение члена команды по id

	public static function getCrewItemById($id) {
		$id = (int)$id;

		if ($id) {
			$pdo = DBconnect::getConnection();
			$query = "SELECT crew_id, crew_title, crew_name, crew_text, crew_img, crew_class
			          FROM crew
			          WHERE crew_id = ?;";

            $res = $pdo->prepare($query);
            $res->execute([$id]);
			$crewItem = $res->fetch();

			return $crewItem;
		}
		
	}

}