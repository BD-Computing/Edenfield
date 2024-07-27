<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        $settings = DB::table('settings')->get();
        return view('admin.settings.index', ['settings' => $settings]);
    }
}
