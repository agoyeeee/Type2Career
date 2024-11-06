<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function landing()
    {
        // Tampilkan view untuk landing page
        return view('landing');
    }}
