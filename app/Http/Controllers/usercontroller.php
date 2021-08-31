<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class usercontroller extends Controller
{
  
    public function index(){
        $users = DB::table('users')->get();
        return view('components.user-table',['data'=>$users]);
    }
    public function apt(){
        return view("admin.index");
    }
    public function punks(){
        $users = DB::table('users')->simplePaginate(15);
        return $users;
    } 
    
}
