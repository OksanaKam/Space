<?php

class Technology {

	// Получение списка технологий

	public static function getTechList() {

		$pdo = DBconnect::getConnection();

		$query = "SELECT tech_id, tech_subtitle, tech_title, tech_text, tech_image
                  FROM tech;";

		return $pdo->query($query)->fetchAll();

	}

	// Получение технологии по id

	public static function getTechItemById($id) {
		$id = (int)$id;

		if ($id) {
			$pdo = DBconnect::getConnection();
			$query = "SELECT tech_id, tech_subtitle, tech_title, tech_text, tech_image
                      FROM tech
                      WHERE tech_id = ?;";

            $res = $pdo->prepare($query);
            $res->execute([$id]);
			$techItem = $res->fetch();

			return $techItem;
		}

	}

}