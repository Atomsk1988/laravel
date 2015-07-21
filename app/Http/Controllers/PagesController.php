<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Log;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function __contruct(Request $request, $id){
        $this->has_user_session = $request->session()->has('user');
        
        
    } 

    
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('pages.welcome');
    }

    public function users()
    {
        if (Auth::guest()){
             redirect()->intended('welcome');
        }
        $users = DB::Table('users')->get();
        return view('pages.users', $users);
    }
}
