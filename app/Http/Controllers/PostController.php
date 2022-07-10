<?php

namespace App\Http\Controllers;

use App\HealthcareUser;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(HealthcareUser $healthcareuser) {
            return view('healthcare/index')
              ->with(['healthcare'=> $healthcareuser->get()]);
        }
}
