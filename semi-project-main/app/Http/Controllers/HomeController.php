<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function cart(){
        return view('layout.cart');
    }

    public function checkout(){
        return view('layout.checkout');
    }

    public function wishlist(){
        return view('layout.wishlist');
    }
    public function product(){
        return view('layout.product');
    }
    public function productdetail(){
        return view('layout.productdetail');
    }
    public function errorpage(){
        return view('layout.404page');
    }
    public function myaccount(){
        return view('layout.account');
    }


    public function register(){
        return view('layout.register');
    }
    public function registerpost(){
        return view('layout.login');
    }
    public function login(){
        return view('layout.login');
    }
    public function loginpost(){
        return view('layout.home');
    }
    public function blogarchive1(){
        return view('layout.blogarchive1');
    }
    public function blogarchive2(){
        return view('layout.blogarchive2');
    }
    public function blogsingle(){
        return view('layout.blogsingle');
    }
}

