<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Input;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is_admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::all();

        return view('adminHome', compact('users', 'roles'));
    }


    public static function giveRoleToUser(Request $request)
    {
        //$users = User::all();
        //$questionId = Input::get('userSelect');
        //echo $questionId;
        //$user = $request->get('userSelected');
        //$role = $request->get('roleSelected');


        $user = User::find(json_decode($request->get('userSelected'))->id);
        $role = Role::findById(json_decode($request->get('roleSelected'))->id);

        $user->assignRole($role);
        
        return back()->with('message','Operation Successful !');
    }
}
