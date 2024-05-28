<?php

namespace App\Http\Controllers\Authentication\Register;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class IndexController extends Controller
{
    public function __invoke(): View
    {
        return view('authentication.register.index');
    }
}
