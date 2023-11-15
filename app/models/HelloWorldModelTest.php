<?php

namespace app\models;

use PHPUnit\Framework\TestCase;

class HelloWorldModelTest extends TestCase
{
    public function testGetReturnsDataWithCodeAndResponse()
    {
        $model = new HelloWorldModel();
        $response = [
            'message' => 'Hello World',
        ];

        $expectedData = [
            'code' => 200,
            'response' => $response,
        ];

        $result = $model->get();

        $this->assertEquals($expectedData, $result);
    }
}