<?php
/********************************
Developer: Anonymous
Anonymous Anonymous
********************************/
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoggedInAPI extends Controller
{
    public function loggedin()
    {
        
        
        return response() -> json([
            'isAuthenticated' => Auth::check(),
            'customer' => Auth::check() ? Auth::user() : null,
        ]);
    }   
}
