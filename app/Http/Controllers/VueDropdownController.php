<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VueDropdownController extends Controller
{
    //


    public function index()
    {
        return view('vue-dropdown');
    }


    public function show()
    {
        $json = File::get(storage_path('app/public/posts.json'));

        return $json;
    }
}
