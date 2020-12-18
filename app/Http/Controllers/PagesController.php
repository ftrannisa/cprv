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

    public function report() {
        $report = DB::table('products')
            ->leftJoin('user', 'products.pin', '=', 'user.pin')
            ->get();
            
            return view('report', ['data' => $report]);

    }
}
