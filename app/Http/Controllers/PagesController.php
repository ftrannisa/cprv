<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;


class PagesController extends Controller
{
    public function login() {
        return view('login');
    }

    public function product(Request $request) {
        $value = $request->session()->get('key', 'pin');
        // echo $value;
        if ($value === 'default') {
            Session::flash('error', 'Please login first');
            return redirect()->route('login');
        } else {
            return view('product');
        }
    }

    public function report() {
        $report = DB::table('products')
            ->join('user', 'products.pin', '=', 'user.pin')
            ->get();

            return view('report', ['data' => $report]);

    }
}
