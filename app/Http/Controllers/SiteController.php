<?php

namespace App\Http\Controllers;

use App\Character;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SiteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $characters = Character::where('user_id', Auth::user()->id)->get();
    
        return view('characters', compact('characters'));
    }
    
    public function database()
    {
        return view('database');
    }
}
