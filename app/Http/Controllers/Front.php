<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Http\Controllers\Controller;

class Front extends Controller
{
    public function index() {
        return 'index page';
    }

    public function products() {
        return 'products page';
    }

    public function product_details($id) {
        return 'product details page';
    }

    public function product_categories() {
        return 'product categories page';
    }

    public function product_brands() {
        return 'product brands page';
    }

    public function blog() {
        return 'blog page';
    }

    public function blog_post($id) {
        return 'blog post page';
    }

    public function contact_us() {
        return 'contact us page';
    }

    public function login() {
        return 'login page';
    }

    public function logout() {
        return 'logout page';
    }

    public function cart() {
        return 'cart page';
    }

    public function checkout() {
        return 'checkout page';
    }

    public function search($query) {
        return "$query search page";
    }
}
