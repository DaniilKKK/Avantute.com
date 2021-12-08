<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function orders() {
        if (Auth::check()) {
            $orders = Order::where([
                'client_id' => Auth::user()->id,
            ])->get();
        } else {
            $orders = [];
        }

        return view('clientOrders', [
            'orders' => $orders
        ]);
    }
}
