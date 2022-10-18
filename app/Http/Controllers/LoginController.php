<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('layout/login');
    }

    public function register() {
        return view('layout/register');

    }

    public function tahun($berapa) {
        return view('layout/coba');
        echo 'Tahun terbit'. $berapa;

    }



}
