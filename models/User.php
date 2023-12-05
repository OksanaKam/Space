<?php

class User {

    // свойство для хранения объекта подключения к БД
    private static $pdo;

    // метод для получения объекта подключения к БД
    private static function getPDO() {
        self::$pdo = DBConnect::getConnection();
    }

    // метод для проверки электронной почты
    private static function validate_email($user_email) {
        $query = "SELECT user_email
		          FROM users
                  WHERE user_email = :user_email;";

        $result = self::$pdo->prepare($query);
        $result->bindParam(':user_email', $user_email, PDO::PARAM_STR);
        $result->execute();
        $rowCount = $result->rowCount();
        if ($rowCount > 0) {
            return "You have already subscribed to the newsletter";
        }
    }

    // метод для проверки данных формы

    public static function validate_form(){

		$errors = [];
		$input = [];

		// экранируем введенные данные
		$input['email'] = htmlspecialchars(trim($_POST['email']));

		// проверка данных

		self::getPDO(); // получаем объект подключения к БД и кладем с свойство $pdo

		// проверка емейла
		$validate_email_error = self::validate_email($input['email']);
		if($validate_email_error){
			$errors['email'] = $validate_email_error;
		}

		// возвращаем массив с ошибками и данными пользователя
		return [$errors, $input];
	}

    // метод для обработки данных при успешной проверке

    public static function process_form($input) {
        // добавление данных в БД
        self::$pdo();
        $query = "INSERT INTO users (user_email) 
                  VALUES (?);";
        $result = self::$pdo->prepare($query);
		$result->execute([$input['user_email']]);

        header('Location: /');
    }
    
    // метод для отображения формы регистрации

    public static function show_form($errors = [], $input = []) {

        $fields = ['user_email'];

        foreach ($fields as $el){
			$input[$el] ?? $input[$el] = '';
			$errors[$el] ?? $errors[$el] = '';
		}

    }
}