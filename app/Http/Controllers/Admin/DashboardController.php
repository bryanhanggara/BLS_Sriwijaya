<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Sub;

class DashboardController extends Controller
{
    public function index(){

        return view('admin.dashboard',[
            'user' => User::count(),
            'sub' => Sub::count(),
            'verified' => User::whereNotNull('email_verified_at')->count(),
            'feed' => User::whereNotNull('feedback')->count(),
        ]);
    }
}
