<?php

namespace App\Traits;

use League\CommonMark\Inline\Element\Code;
use Illuminate\Http\Response; 
trait ApiResponser
{
    public function succesResponse($data, $code = Response::HTTP_OK)
    {
        return response()->json(['data' => $data], $code);
    }
    public function errorResponse($message, $code)
    {
        return response()->json(['error' => $message, 'codigo' => $code], $code); 
    }
    public function errorTOKEN($message, $code)
    {
        return response()->json(['wsp_mensaje' => $message, 'codigo' => $code], $code); 
    }
}