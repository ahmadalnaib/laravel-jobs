<?php

namespace App\Tratis;


trait ApiResponses
{

  protected function ok($message){
    return $this->success($message,200);
  }


    protected function success($message, $statuscode = 200)
    {
        return response()->json(
          ['message' => $message,
          'statuscode'=>$statuscode], $statuscode);
    }

 
}