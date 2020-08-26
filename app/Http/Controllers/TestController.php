<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    //
    public function teste(){

        $user = User::where('email', 'lucas.assuncao@freicarlosvicuna.com.br')->first();
        
        return $user;

        return Auth::user();
    }
}
