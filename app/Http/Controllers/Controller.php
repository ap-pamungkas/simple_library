<?php

namespace App\Http\Controllers;

abstract class Controller
{
    // success Response

    public function sendResponse($result, $message){

        $response =[
            'success' => true,
            "data" => $result,
            "message" => $message
        ];

        return response()->json($response, 200);

    }


    // Error Response

    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
            'data' => $errorMessages
        ];
        return response()->json($response, $code);
    }
}
