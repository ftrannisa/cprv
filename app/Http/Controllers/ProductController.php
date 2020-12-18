<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;


class ProductController extends Controller
{
    public function product(Request $request) {
        $value = $request->session()->get('key', false);
        if (!$value) {
            Session::flash('error', 'Please login first');
            return redirect()->route('login');
        } else {
            return view('product');
        }
    }
    
    public function postProducts(Request $request)
    {
        $data = [
            'product1'  => $request->input('product1'),
            'product2'  => $request->input('product2'),
        ];
 
        // var_dump($data);
        $pin = $request->session()->get('key');
        $products = DB::table('products')->insert([
            ['productA' => $data['product1'],'productB' => $data['product2'], 'pin' => $pin]
        ]);
        
        return redirect()->route('reports');
    }


}
