<?php

// Class Router
// класс для получения данных из строки запроса
// и подключения нужного контроллера

class Router {
	private $routes; // свойство для хранения массива с маршрутами

	// Получаем массив с маршрутами

	public function __construct() {
		$routesPath = ROOT . '/config/routes.php';
		$this->routes = require $routesPath;

	}

	//Получаем данные из строки запроса (URI)

	private function getUri(){
		if(!empty($_SERVER['REQUEST_URI'])){
			return trim($_SERVER['REQUEST_URI'], '/');// удаляем символы "/" с краев строки
		}
	}

	// сравнение данных из строки запроса и массива с маршрутами
	// при нахождении совпадения из значения конкретного элемента массива
	// сформировать название контролера и метода в этом контролере
	// подключить нужный контролер и вызвать нужный метод

	public function run(){
		// получаем строку запроса
		$uri = $this->getUri();

		// перебираем массив с маршрутами с целью найти совпадения в $uri и ключах массива
		// $uriPattern - ключи элементов массива, $path - значения
		foreach($this->routes as $uriPattern => $path){

			// проверяем совпадения ключа в массиве ($uriPattern) и строки запроса ($uri)
			if( preg_match("#$uriPattern#", $uri) ){// если есть совпадение

				// получаем внутренний маршрут из строки запроса и значения элемента в массиве
				// ищем подстроки по шаблону "#$uriPattern#" в строке $uri и подставляем в $path
				// "#$uriPattern#" - "#planets/([0-9]+)#", $uri - planets/1, $path - planets/view/$1
				// результат - planets/view/1
				$internalRoute = preg_replace("#$uriPattern#", $path, $uri);

				// разделяем маршрут на массив по "/"
				$segments = explode('/', $internalRoute);

				// формируем название контроллера, который нужно подключить
				$controllerName = ucfirst(array_shift($segments)) . 'Controller'; // NewsController

				// формируем название метода в контроллере, который будет обрабатывать запрос
				$actionName = 'action' . ucfirst(array_shift($segments)); // index -> actionIndex

				// если остались данные в массиве, кладем в массив с параметрами
				$parameters = &$segments;

				// подключаем нужный контроллер
				$controllerFile = ROOT . "/controllers/$controllerName.php";
				if(file_exists($controllerFile)){ // если файл есть, подключаем
					require $controllerFile;
				}

				// создаем объект нужного контроллера и вызываем нужный метод
				$controllerObject = new $controllerName();
				$result = $controllerObject->$actionName(...$parameters);

				// если метод сработал, прерываем цикл
				if($result){
					break;
				}


			}
		}
	}

}