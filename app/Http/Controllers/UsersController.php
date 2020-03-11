<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    //
    public function index()
    {

        $datos['users']=User::paginate(5);

        return view('users.index', $datos);
        
    }
    
}
