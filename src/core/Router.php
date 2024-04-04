<?php

class Router
{
  protected $routes = [];

  public static function load($file)
  {
    $router = new static;
    require $file;

    return $router;
  }

  public function define($routes)
  {
    $this->routes = $routes;
  }

  public function direct($uri)
  {
    $parsedUri = parse_url($uri);
    $path = $parsedUri['path'];

    if (array_key_exists($path, $this->routes)) {
      return $this->routes[$path];
    }

    throw new Exception(('No route define for this URI'));
  }
}
