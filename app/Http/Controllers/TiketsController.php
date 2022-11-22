<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class TiketsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            ''
        ]);
    }
}
