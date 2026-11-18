<?php

namespace App\Http\Controllers;
use App\Models\News;
class PublicNewsController extends Controller
{
public function index(){
    $news = News::where('is_published',1)->orderBy('created_at','desc')->limit(3)->get();
    return view('index',compact('news'));
}
}
