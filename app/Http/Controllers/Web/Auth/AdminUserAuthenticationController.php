<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\MasterCountryModel;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminUserAuthenticationController extends Controller
{
    function showLoginForm() : View
    {
        return view('auth.login');
    }

    function showRegisterForm() : View
    {
        $countries = MasterCountryModel::where('is_deleted',0)->get();
        return view('auth.register',compact('countries'));
    }
}
