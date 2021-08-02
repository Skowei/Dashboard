<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);
        return view('dashboard.users.index', compact('users'));
    }
}
