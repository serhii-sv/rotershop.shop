<?php

namespace App\Http\Controllers\Backend;

    use App\Http\Controllers\Controller;
    use App\Models\UserCartShopping;
    use App\Models\UserTicket;
    class DashboardController extends Controller
    {
        public function __construct()
        {
            $this->middleware('backend');
        }

        public function showDashboard()
        {
            $recentOrders = UserCartShopping::orderByDesc('created_at')->limit(10)->get()->all();
            $tickets = UserTicket::orderByDesc('created_at')->limit(10)->get()->all();
            return view('backend.dashboard',['recentOrders'=>$recentOrders,'tickets'=>$tickets]);
        }
    }
