<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;

class DashboardSettingsController extends DashboardController
{
    public function index() {
        return view('dashboard.settings.basic.index');
    }
}
