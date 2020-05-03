<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $data_profile = \App\Profile::all();
        return view('profile.index',['data_profile' => $data_profile]);
    }
    public function create(Request $request)
    {
        \App\Profile::create($request->all());
        return redirect('/profile');
    }

}
