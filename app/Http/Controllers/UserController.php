<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Momentum\Modal\Modal;

class UserController extends Controller
{
    public function create(): Modal
    {
        return Inertia::modal(component: 'Users/Create')
            ->basePageRoute(name: 'dashboard');
    }
}
