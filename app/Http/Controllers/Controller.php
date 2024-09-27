<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function success($data, $message = "", $apiCode = 0, $error = "")
    {
        if (empty($data))
        {
            $data = [];
        }
        if (empty($apiCode)) 
        {
            $apiCode = 0;
        }
        if (empty($message)) 
        {
            $message = '';
        }
        if (empty($error)) 
        {
            $error = '';
        }

        return [
            'success' => true,
            'code' => $apiCode,
            'message' => $message,
            'data' => $data,
            'error' => $error,
        ];
    }

    public function failed($data, $message = "", $apiCode = 400, $error = "")
    {
        if (empty($data))
        {
            $data = [];
        }
        if (empty($apiCode)) 
        {
            $apiCode = 400;
        }
        if (empty($message)) 
        {
            $message = '';
        }
        if (empty($error)) 
        {
            $error = '';
        }

        return [
            'success' => false,
            'code' => $apiCode,
            'message' => $message,
            'data' => $data,
            'error' => $error,
        ];
    }
}
