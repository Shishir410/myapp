<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_Management;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard.nab_and_side');
    }


    public function list()
    {
        $list =  User_Management::get();

        return view('dashboard.list', compact('list'));
    }

    public function create()
    {
        return view('dashboard.create');
    }

    public function store(Request $request)
    {
        $user = new User_Management();
        $user->name = $request->name;
        $user->age = $request->age;
        $user->position = $request->position;
        $user->mail = $request->email;
        $user->join_date = $request->join_date;
        $user->save();
        return redirect('list');
    }
}
