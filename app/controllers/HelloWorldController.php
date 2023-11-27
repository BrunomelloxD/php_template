<?php

namespace app\controllers;

use app\views\Response;
use app\models\HelloWorldModel;

class HelloWorldController
{
    public function get($params)
    {
        // Request example
        // http://localhost:8000/hello-world?name=bruno
        var_dump($params->name);
        $helloWorldModel = new HelloWorldModel();
        $data = $helloWorldModel->get();

        return Response::json($data);
    }
}