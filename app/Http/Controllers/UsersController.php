<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Sentinel;
use Session;
class UsersController extends Controller
{
    public function signup()
{
    return view('halamansignup');//viewnya
}
public function signup_store(UserRequest $request)
{
    Sentinel::registerAndActivate($request->All());
 //   Session::flash('notice','Success create new user');
    return redirect()->back();
}
}
