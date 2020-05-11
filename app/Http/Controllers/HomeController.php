<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $orders = Order::where('status','!=',4)->latest()->get();
        return view('home', [
            'orders' => $orders
        ]);
    }
}
