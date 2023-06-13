<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UpdateUserController extends Controller
{
    //
    public function updateUser(UpdateProfileRequest $request){
        $request->whenFilled('password', function (string $password) use($request) {
            $request->validate([
                'password' => 'filled|confirmed|min:8'
            ]);
            Auth::user()->update($request->all());
            Auth::user()->update([
                'password'=> Hash::make($request->password)
            ]);
        }, function () use($request) {
            Auth::user()->update(array_filter($request->all()));
        });
        return redirect()->back();
    }
}
