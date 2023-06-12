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
        /*if ($request->filled('password')){
            $request->validate([
                'password' => 'nullable|confirmed|min:8'
            ]);
            $user->update($request->all());
            $user->update([
                'password'=> Hash::make($request->password)]);
        }
        else{
            $user->update([array_filter($request->all())]);
        }*/
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
