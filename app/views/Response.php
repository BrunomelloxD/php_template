<?php

namespace app\views;

class Response
{
    public static function json($data)
    {
        header("Content-type: application/json; charset=UTF-8");
        echo json_encode($data);
    }
}