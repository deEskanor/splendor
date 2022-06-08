<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index(){


        $products = Product::where('show_on_home','1')->inRandomOrder()
            ->take(8) // here is limit
            ->get();



        return view('home.index', [
            'products' => $products
        ]);

    }

    public function contact(){
        return view('home.contact');
    }
}
