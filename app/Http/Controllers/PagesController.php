<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    public function __contruct(){
       
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
        return view('pages.home', $this->userAuthed);
    }
    public function users()
    {
         
        $users = DB::Table('users')->get();
        return view('pages.users', $users);
    }
}
