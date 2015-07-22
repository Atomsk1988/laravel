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
        
        $this->logged=($request->user())?true:false;
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
    public function home()
    {
        return view('pages.home');
    }
    public function users()
    {
         
        $users = DB::Table('users')->get();
        return view('pages.users', $users);
    }
}
