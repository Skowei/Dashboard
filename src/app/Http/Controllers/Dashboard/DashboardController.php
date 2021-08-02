<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard.dashboard');
    }

    public function examples() {
        $colors = ['blueGray', 'coolGray', 'gray', 'trueGray', 'warmGray', 'red', 'orange' ,'amber', 'yellow','lime',
        'green', 'emerald', 'teal', 'cyan', 'sky', 'blue', 'indigo', 'purple', 'fuchsia', 'pink', 'rose'];
        return view('dashboard.examples', compact('colors'));
    }
}
