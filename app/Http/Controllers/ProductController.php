<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //
    public function index() {
        
        $product = new Product();
        $products = $product->all();
        // var_dump($product);
        return view('main', compact('products'));
    }

    public function product(Request $request, $id) {
        // return view('productCategory');
        // echo $id;   
        $product = Product::find($id);
        // print_r($product);
        if($id == 1){   
            return view('product.series');
        }
        elseif( $id == 2 ) {
            return view('product.weldingmachine');
        }
    }

    public function productdetail(Request $request, $id) {

        $product = Product::find($id);

        if( $id == 1 ) {
            return view('productdetail.series');
        }
        elseif( $id == 2 ) {
            return view('productdetail.weldingmachine');
        }
    }

    public function showNews() {
        return view('news');
    }

    public function contactUs() {
        return view('contactus');
    }
}
