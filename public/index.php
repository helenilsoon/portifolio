<?php

require __DIR__ . '/../vendor/autoload.php';

// use app\Sql;

// $sql = new Sql();

// $sql->select("SELECT * FROM tb_user");
// echo json_encode($sql);

// use Slim\Factory\AppFactory;



// $app = AppFactory::create();

// $app->get('/', function ($resquest,$response) {
//     $name = $args['helenilson'];
//     $response->getBody()->write("Hello, $name");
//     return $response;
// });

// $app->run();

use app\classes\User;

$user = new User();

$user->loadById();