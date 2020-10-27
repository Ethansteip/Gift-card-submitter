<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form_submit extends Controller
{
    function submit(Request $req) {
        return $req->input();
    }
}
