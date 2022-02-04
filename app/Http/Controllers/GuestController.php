<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class GuestController extends Controller
{
    public function home() {

        return view('pages.home');
    }
}
