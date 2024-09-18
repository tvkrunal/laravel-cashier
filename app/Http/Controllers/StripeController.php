<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plan;

class StripeController extends Controller
{
    public function index(Request $request) {
        $plans = Plan::get();
        return view("plans", compact("plans"));
    }

      /**
     * Display the specified resource.
     */
    public function show(Plan $plan)
    {
        dd(auth()->user()->subscription[0]);
        $intent = auth()->user()->createSetupIntent();
        return view("subscription", compact("plan","intent"));
    }
}
