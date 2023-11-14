<?php

namespace app\models;

use app\repositories\HelloWorldRepository;

class HelloWorldModel implements HelloWorldRepository
{
    public function get()
    {
        $data = [
            'message' => 'Hello World',
        ];

        return $data;
    }
}