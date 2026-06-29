<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function auth(Request $req) 
    {

        if (Auth::attempt(['email'=>"mahasiswa@gmail.com", 'password'=>"password123"])) {
            session()->put('email', "mahasiswa@gmail.com");
            session()->put('name', "Erwin");
            
            return "<script>
            alert('Welcome, " . session('name') . "');
            location.href='/products';
            </script>";
        }
        return redirect('/login')->with('msg', 'Email / password salah');
    }
}
