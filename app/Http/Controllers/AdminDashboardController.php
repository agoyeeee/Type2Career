<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;


class AdminDashboardController extends Controller
{
    public function index()
    {
        return view('dashboard'); // Pastikan ini sesuai dengan nama view yang ada di folder views
    }
}
