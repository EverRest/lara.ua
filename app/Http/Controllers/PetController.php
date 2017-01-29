<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        return view('pages.index');
    }

    public function search(Request $request)
    {
        return view('pages.search');
    }

    public function store(Request $request)
    {
        return view('pages.store');
    }
}
