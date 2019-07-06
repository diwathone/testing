<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdministratorController extends Controller
{
    public function __construct() {
        $this->middleware("auth:web,admin");
    }
    //
    public function index() {
        return view("admin");
    }
    
}