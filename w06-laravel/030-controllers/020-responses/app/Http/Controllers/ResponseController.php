<?php

namespace App\Http\Controllers;

use App\Models\User;

class ResponseController extends Controller
{
    public function text()
    {
        return "Hello World!";
    }
    
    public function arrayMarshalled()
    {
        return ['message' => 'Hello World!'];
    }
    
    public function responseClass()
    {
        return response('Hello World!', 200)
            ->header('Content-Type', 'text/plain');
    }
    
    public function eloquentModel()
    {
        $user = User::find(1);
        
        return $user;
    }
}
