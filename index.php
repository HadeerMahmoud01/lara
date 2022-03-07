<?php

require "vendor/autoload.php";

use  app\http\Controller\UserController;
$user = new UserController();
echo $user->index();












?>