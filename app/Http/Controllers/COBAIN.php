<?php

namespace App\Http\Controllers;

use App\Models\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $data = Profile::getData();

        return view('cobain', $data);
    }
}