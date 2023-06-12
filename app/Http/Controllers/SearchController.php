<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    
    public function getAllUser(Request $request){
            $_AllUsers = DB::table('user')->get();
            return view('liste', ['Users'=>$_AllUsers]);
        
    }

    function search(Request $request)
    {
        $_SearchedUsers = DB::table('user')->get();
        
        $users = DB::table('user')->get();
        $attribute = $_POST['attribute'];
        $categorie = $_POST['categorie'];
        //return $request->search;
        if($categorie == "Aucun"){
            $_SearchedUsers = DB::table('user')->where($attribute,'LIKE','%'.$request->search.'%')->get();
        }
        else{
            $_SearchedUsers = DB::table('user')
                ->where($attribute,'LIKE','%'.$request->search.'%')
                ->where('categorie','=',$categorie)
                ->get();
        }
        return view('liste', ['Users'=>$_SearchedUsers]);

    }
}
