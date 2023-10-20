<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Routes\Providers\Admin\AdminRoutes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Inertia\Inertia;

class AdminDashboardIndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Inertia\Response
     */
    public function index(Request $request)
    {
        return Inertia::render('AdminDashboard/Index', [
            'create_url' => URL::route(AdminRoutes::ADMIN_DASHBOARD, ['locale' => \App::getLocale()]),
        ]);
    }
}
