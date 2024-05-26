<?php

namespace App\Http\Controllers\Authentication\Login;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        return view('authentication.login.index');
    }
}
