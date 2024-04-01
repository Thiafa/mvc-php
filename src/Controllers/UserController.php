<?php
require('Controller.php');

class UserController extends Controller
{
  public function __construct()
  {
  }
  public static function index()
  {
    return self::redirect('./product.php');
  }
  public function show($id)
  {
    return '';
  }
  public static function create()
  {
    return self::redirect('./User/create.php');
  }
  public function store($id, $data)
  {
    return;
  }

  public function delete($id)
  {
    return;
  }
}
