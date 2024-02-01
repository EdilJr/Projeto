<?php 

use Illuminate\Support\Facades\Route;
use Auth;
class AuthController extends Controller {

    public function authenticate()
    {
        if (Auth::attempt(['email' => $email, 'password' => $password]))
        {
            return redirect()->intended('dashboard');
        }
    }

}