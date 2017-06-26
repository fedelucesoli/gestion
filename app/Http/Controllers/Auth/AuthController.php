<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }

    public function getLogout() {

      Auth::guard("web")->logout();

      Session::flush();
      return Redirect::route('inicio');

    }
}
