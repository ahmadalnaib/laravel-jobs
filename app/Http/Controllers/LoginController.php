<?php

namespace App\Http\Controllers;

use App\Tratis\ApiResponses;
use Illuminate\Http\Request;
use App\Http\Requests\ApiLoginRequest;

class LoginController extends Controller
{
    //
    use ApiResponses;
    public function login(ApiLoginRequest $request)
    {

        return $this->ok($request->email);
        
    }


    public function register(Request $request)
    {
        return $this->ok('Register Controller');
    }
}
