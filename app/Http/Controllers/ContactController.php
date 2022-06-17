<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function input(Request $request) {
        return view('contact/input');
    }
}
