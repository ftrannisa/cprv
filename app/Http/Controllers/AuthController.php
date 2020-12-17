<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Validator;
use Hash;
use Session;
use App\User;
 
 
class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) {
            return redirect()->route('product');
        }
        return view('login');
    }
 
    public function login(Request $request)
    {
        $rules = [
            'pin'              => 'required|numeric|digits_between:4,4'
        ];
 
        $validator = Validator::make($request->all(), $rules);
 
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }
 
        $data = [
            'pin'  => $request->input('pin'),
        ];
 


        $user = DB::table('user')->where('pin', $data['pin'])->first();
 
 
        if ($user) {
            $request->session()->put('key',  $user->pin);
            $value = $request->session()->get('key', $user->pin);
            echo $value;
            return redirect()->route('product', ['pin' => $user]);
        } else {
            Session::flash('error', 'Please input the correct PIN');
            return redirect()->route('login');
        }
 
    }
 
}