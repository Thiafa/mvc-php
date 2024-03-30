<?php
require('src/Controllers/Controller.php');

class UserController extends Controller
{
  public function __construct()
  {
  }
  public function index()
  {
    var_dump('Chegou aqui');
    return $this->redirect('src/Views/user.php');
  }
  public function show($id)
  {
    return '';
  }
  public function create()
  {
    return;
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
