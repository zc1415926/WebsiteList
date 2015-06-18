<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Laracasts\Flash\Flash;


class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['username'=>$request['username'],
                        'password'=>$request['password']]))
        {
            Flash::success("Welcome, " . $request['username'] . "!");
            return redirect('listmanager');
        }

        Flash::danger('Maybe your username or password is wrong!');

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
