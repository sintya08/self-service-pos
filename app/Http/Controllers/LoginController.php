<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    //
    public function login()
    {
        if ('Auth'::check()) {
            return redirect('home');
        }else{
            return view('login');
        }
    }

    public function actionlogin(Request $data)
    {
        $data = [
            'email' => $data->input('email'),
            'password' => $data->input('password'),
        ];

        if ('Auth'::Attempt($data)) {
            return redirect('home');
        }else{
            'Session'::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout()
    {
        'Auth'::logout();
        return redirect('/');
    }
}
