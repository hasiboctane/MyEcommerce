<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function dash(){
        return view('backend.index');
    }
    public function index(){
        return view('backend.category.index');
    }
    public function create(){
        return view('backend.category.create');
    }
    public function store(Request $request){

    }


}
