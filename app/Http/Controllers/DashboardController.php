<?php
namespace App\Http\Controllers;

use App\Models\Application;

class DashboardController extends Controller {
    public function index() {
        return view('admin.dashboard');
    }

    public function applications() {
        return view('admin.pages.application');
    }

    public function getData() {
        $applications = Application::orderBy('id', 'desc')->get();
        $view = view('admin.render._application', compact('applications'))->render();

        return response()->json([
            'status' => 200,
            'view' => $view
        ]);
    }

}
