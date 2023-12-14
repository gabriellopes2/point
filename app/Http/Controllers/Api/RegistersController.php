<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Registers;
use Illuminate\Http\Request;

class RegistersController extends Controller
{
    public function index()
    {
        return Register::where('user_id', 2)->orderBy('id')->get();
    }

    public function store(Request $request)
    {
        return response()
            ->json($register = Registers::create($request->all()), 201);
    }
}
