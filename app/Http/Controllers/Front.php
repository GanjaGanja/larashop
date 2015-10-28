<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Http\Controllers\Controller;

class Front extends Controller
{
    public function index() {
        return view('home', array('page' => 'home'));
    }

    public function products() {
        return view('products', array('page' => 'products'));
    }

    public function product_details($id) {
        return view('product_details', array('page' => 'products'));
    }

    public function product_categories($name) {
        return view('products', array('page' => 'products'));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('page' => 'products'));
    }

    public function blog() {
        return view('blog', array('page' => 'blog'));
    }

    public function blog_post($id) {
        return view('blog_post', array('page' => 'blog'));
    }

    public function contact_us() {
        return view('contact_us', array('page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('page' => 'home'));
    }

    public function logout() {
        return view('login', array('page' => 'home'));
    }

    public function cart() {
        return view('cart', array('page' => 'home'));
    }

    public function checkout() {
        return view('checkout', array('page' => 'home'));
    }

    public function search($query) {
        return view('products', array('page' => 'products'));
    }
}
