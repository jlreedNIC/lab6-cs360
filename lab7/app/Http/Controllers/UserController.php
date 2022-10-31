<?php

namespace App\Http\Controllers; 
  
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request; 
use DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();

        return view([AuthController::class, 'dashboard'], ['users'=>$users]);
    }
}
