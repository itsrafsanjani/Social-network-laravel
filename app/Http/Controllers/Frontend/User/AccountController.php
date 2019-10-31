<?php

namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use Log;
use App\Models\Auth\User;

/**
 * Class AccountController.
 */
class AccountController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {

        // Log::info(\Auth::user()->info);
        // return view('frontend.user.account');
        return view('work.account');

    }
    public function settings(){

        return view('work.settings');
    }
    public function userAccount($id){
        return view('work.profile', ['user' => User::findOrFail($id)]);
    }
}
