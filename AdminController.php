<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function view_admin(){
        
       
        return view('main.admin');
    }
    function view_admin_categories(){
        
        $categories=Category::all();
        return view('main.admin/categories')->with('categories',$categories);
    }
}

