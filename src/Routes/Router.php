<?php
require('./src/Controllers/UserController.php');

class Router
{
  public $page;
  public static $controller = [];
  public $method;
  protected $routes = [];
  public $name;



  public function __construct($page, $controller, $method)
  {
    $this->page = $page;
    self::$controller = $controller;
    $this->method = $method;
  }

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($uri)
  {
    if (array_key_exists($uri, $this->routes)) {
      return $this->routes[$uri];
    }

    throw new Exception(('No route define for this url'));
  }

  static public function get($url, $controller)
  {
    if (is_array($controller)) {
      $controllerInstance = new $controller[0]();
      return new static($url, [$controllerInstance, $controller[1]], 'GET');
    }
    return new static($url, $controller, 'GET');
  }


  static public function post($url, $controller)
  {
    if (is_array($controller)) {
      $controllerInstance = new $controller[0]();
      return new static($url, [$controllerInstance, $controller[1]], 'POST');
    }
    return new static($url, $controller, 'POST');
  }

  public function name($value)
  {
    $this->name = $value;
    self::$routes[$value] = $this->page;
    return $this;
  }

  public static function route($name)
  {
    return isset(self::$routes[$name]) ? self::$routes[$name] . ".php" : 'index.php';
  }
}
