<?php


namespace Controller;
use app\http\Controller\ShowController;
use app\http\Controller\UpdateController;

require_once "ShowController.php";
require_once "UpdateController.php";
class UserController{
    use ShowController;
    use UpdateController;
public function index(){

    return "show";
}

public function create(){

    return "create";
}



public function store(){

    return "store";
}




public function destroy(){

    return "destroy";
}
}





?>