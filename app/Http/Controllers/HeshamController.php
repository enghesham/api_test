<?php

//php artisan make:controller --resource HeshamController //for make controller with resource (edit,add,delete)
//php artisan // for view all php command

namespace App\Http\Controllers;



class HeshamController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    public function api() {
        //return response()->json("hello world", 200);
        //return "hello world";
        
        return $this->sendResponse("hello world");
    }

    public function sendResponse($result) {
        $response = [
            'success' => true,
            ' data' => $result,
            //' message' => $message,
        ];
        return response()->json($response, 200);
    }

    public function sendError($error, $errorMessages = [], $code = 404) {
        $response = [
            'success' => false,
            ' message' => $error,
        ];
        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }
        return response()->json($response, $code);
    }

    

}
