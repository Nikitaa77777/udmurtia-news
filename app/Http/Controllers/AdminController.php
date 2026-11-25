<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        $totalNews = News::count();
        $publishedNews = News::where('is_published', true)->count();
        $draftNews = News::where('is_published', false)->count();

        return view('admin', compact('totalNews', 'publishedNews', 'draftNews'));
    }


    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->get();
        return view('admin_news', compact('news'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin_news_create', compact('categories'));
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        $categories = Category::all();
        return view('admin_news_edit', compact('news', 'categories'));
    }
}
