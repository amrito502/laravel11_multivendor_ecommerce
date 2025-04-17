<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function dashboard()
    {
        // dd('customer dashboard');
        return view('admin.dashboard');
    }

    public function index()
    {
        return view('customer.index');
    }
}
