<?php

namespace App\Traits;

trait HttpResponses
{
    protected function success($key, $data, $message = null, $code = 200)
    {
        return response()->json([
            'status' => 'Request was successful.',
            'message' => $message,
            $key => $data
        ], $code);
    }

    protected function error($message = null, $code)
    {
        return response()->json([
            'status' => 'Error has occured...',
            'message' => $message,
        ], $code);
    }
}
