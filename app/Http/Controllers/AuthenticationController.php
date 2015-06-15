<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;


class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::attempt(['username'=>$request['username'],
                        'password'=>$request['password']]))
        {

            return redirect('listmanager');
        }

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
