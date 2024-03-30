<?php
class Route
{
  public $page;
  public static $controller;
  public $method;
  public $name;
  public static $routes = [];

  public function __construct($page, $controller)
  {
    $this->page = $page;
    $this->controller = $controller;
  }

  static public function get()
  {
    if (self::$controller[0]) {
      return new static(new self::$controller[0], 'GET');
    } else {
      echo "Controlador não encontrado.";
    }
  }
  static public function post($url, $controller)
  {
    return new static($url, $controller, 'POST');
  }

  public function name($value)
  {
    $this->name = $value;
    self::$routes[$value] = $this->page;
    echo "<pre>";
    var_dump($this);
    echo "</pre>";
    return $this;
  }

  public static function route($name)
  {

    if (isset(self::$routes[$name])) {
      return self::$routes[$name] . ".php";
    } else {
      return '/';
    }
  }

  public static function asd()
  {
    // var_dump(self::$routes);x'
    return self::$routes;
  }
};
