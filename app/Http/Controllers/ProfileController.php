<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;

class ProfileController extends Controller
{
    public function ProfileChange(ProfileRequest $req)
    {
    dd($req->all());
    }
}