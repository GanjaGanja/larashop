<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests;
use App\Brand;
use App\Category;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Cart;

class Front extends Controller
{
    var $brands;
    var $categories;
    var $products;
    var $title;
    var $description;

    public function __construct()
    {
        $this->brands = Brand::all(array('name'));
        $this->categories = Category::all(array('name'));
        $this->products = Product::all(array('id', 'name', 'price'));
    }

    public function index() {
        return view('home', array('title' => 'Welcome', 'description' => '', 'page' => 'home', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function products() {
        return view('products', array('title' => 'Products Listing', 'description' => '', 'page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_details($id) {
        $product = Product::find($id);
        return view('product_details', array('product' => $product, 'title' => $product->name, 'description' => '', 'page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_categories($name) {
        return view('products', array('title' => 'Welcome', 'description' => '', 'page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function product_brands($name, $category = null) {
        return view('products', array('title' => 'Welcome', 'description' => '', 'page' => 'products', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function blog() {
        return view('blog', array('title' => 'Welcome', 'description' => '', 'page' => 'blog', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function blog_post($id) {
        return view('blog_post', array('title' => 'Welcome', 'description' => '', 'page' => 'blog', 'brands' => $this->brands, 'categories' => $this->categories, 'products' => $this->products));
    }

    public function contact_us() {
        return view('contact_us', array('title' => 'Welcome', 'description' => '', 'page' => 'contact_us'));
    }

    public function login() {
        return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function logout() {
        return view('login', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function cart() {
        //add 1-99 new items to cart
        if (Request::isMethod('post')) {
            if ((Request::get('quantity') >= 1) && (Request::get('quantity') < 100)) {
                $quantity = Request::get('quantity');
             } else {
                $quantity = 1;
             }
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => $quantity, 'price' => $product->price));
        }

        //increment the quantity
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $rowId = Cart::search(array('id' => Request::get('product_id')));
            $item = Cart::get($rowId[0]);
            Cart::update($rowId[0], $item->qty + 1);
        }

        //decrease the quantity
        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $rowId = Cart::search(array('id' => Request::get('product_id')));
            $item = Cart::get($rowId[0]);
            Cart::update($rowId[0], $item->qty - 1);
        }

        //remove item
        if (Request::get('product_id') && (Request::get('remove')) == true) {
            $rowId = Cart::search(array('id' => Request::get('product_id')));
            $item = Cart::get($rowId[0]);
            Cart::remove($rowId[0]);
        }

        $cart = Cart::content();
        return view('cart', array('cart' => $cart, 'title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function clear_cart() {
        Cart::destroy();
        return Redirect::away('cart');
    }

    public function checkout() {
        return view('checkout', array('title' => 'Welcome', 'description' => '', 'page' => 'home'));
    }

    public function search($query) {
        return view('products', array('title' => 'Welcome', 'description' => '', 'page' => 'products'));
    }
}
