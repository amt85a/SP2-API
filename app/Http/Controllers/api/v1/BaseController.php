<?php


namespace App\Http\Controllers\api\v1;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller as Controller;
use Illuminate\Support\Facades\Log;


class BaseController extends Controller

{

    public function sendResponse($result, $message)

    {
        $response = [
            'success' => [
                'token'=>$result['token']
            ],
        ];

        $json = response()->json($response, 200);
        Log::debug($json);
        return $json;

    }


    public function sendError($error, $errorMessages = [], $code = 404)

    {

        $response = [

            'success' => false,

            'message' => $error,

        ];


        if(!empty($errorMessages)){

            $response['data'] = $errorMessages;

        }


        return response()->json($response, $code);

    }

}
