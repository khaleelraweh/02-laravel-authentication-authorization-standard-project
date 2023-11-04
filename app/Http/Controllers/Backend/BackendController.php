<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    public function login(){
        return view('backend.admin-login');
    }

    public function register(){
        return view('backend.admin-register');
    }

    public function lock_screen(){
        return view('backend.admin-lock-screen');
    }

    public function recover_password(){
        return view('backend.admin-recoverpw');
    }

    public function index(){
        return view('backend.index');
    }

}
