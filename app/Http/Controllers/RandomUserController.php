<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Models\User;
use DB;


class RandomUserController extends Controller
{
    //
    public function getRandomUser(){
        $_RandomUser = DB::table('user')->inRandomOrder()->first();
        return view('connexion', ['RandomUser'=>$_RandomUser]);
    }
}
