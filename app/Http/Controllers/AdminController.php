<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\Category;
class AdminController extends Controller
{
public function index(){
    return view('admin.dashboard');
}
public function news(){
    $news = News::OrderBy('created_at','desc')->get();
    return view('admin.news.index',compact('news'));
}
}
