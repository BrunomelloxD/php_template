<?php

namespace app\models;

use app\repositories\HelloWorldRepository;

class HelloWorldModel implements HelloWorldRepository
{
    public function get()
    {
        try {
            $response = [
                'message' => 'Hello World',
            ];

            $data = [
                'code' => 200,
                'response' => $response,
            ];

            return $data;
        } catch (\Throwable $th) {
            throw new \RuntimeException('Error:', 0, $th);
        }
    }
}