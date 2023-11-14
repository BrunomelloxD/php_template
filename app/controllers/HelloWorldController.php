<?php

namespace app\controllers;

use app\views\Response;
use app\models\HelloWorldModel;

class HelloWorldController
{
    public function get()
    {
        $helloWorldModel = new HelloWorldModel();
        $data = $helloWorldModel->get();

        return Response::json($data);
    }
}