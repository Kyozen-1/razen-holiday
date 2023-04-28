<?php

namespace App\Http\Controllers\RazenHoliday\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('razen-holiday.admin.dashboard.index');
    }
}
