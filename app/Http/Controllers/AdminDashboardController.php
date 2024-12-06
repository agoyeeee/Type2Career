<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Question;
use App\Models\JobRecommendation;
use App\Models\User;



class AdminDashboardController extends Controller
{
public function index()
{
    $questionsCount = Question::count();
    $jobsCount = JobRecommendation::count();
    $usersCount = User::count();

    return view('dashboard', compact('questionsCount', 'jobsCount', 'usersCount'));
}
}
