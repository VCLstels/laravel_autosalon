<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Car;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $cars = Car::where('is_new', '=', true)->latest('is_new')->take(4)->get();
        $articles = Article::latest('published_at')->take(3)->get();
        return view('pages.homepage', compact('cars', 'articles'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contacts()
    {
        return view('pages.contacts');
    }

    public function conditions()
    {
        return view('pages.conditions');
    }

    public function clients()
    {
        return view('pages.clients');
    }

    public function finance()
    {
        return view('pages.finance');
    }

}
