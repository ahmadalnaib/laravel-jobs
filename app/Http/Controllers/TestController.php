<?php

namespace App\Http\Controllers;

use App\Tratis\ApiResponses;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    use ApiResponses;

    public function test(){

        return $this->ok('Test Controller');
        
    }
}
