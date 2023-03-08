<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index()
    {
        $indexes = array(
            route('home').'/',
            route('about_us').'/',
            route('webinars').'/',
            route('plans').'/',
            route('functions').'/',
            route('mobile').'/',
            route('contact').'/',
            route('politicas').'/',
            route('home').'/crm-colombia/',
            route('home').'/crm-mexico/',
            route('terminos').'/',
            route('ans').'/',
            route('blog').'/'
        );
        return response()->view('sitemap.index', [
            'indexes' => $indexes
        ])->header('Content-Type', 'text/xml');
    }

    public function posts()
    {
        //Get all posts from db
        $posts = DB::table('articles')->orderBy('created_at', 'desc')->get()->where('status', 'active');
        //dd($posts);
        return response()->view('sitemap.posts', [
            'posts' => $posts
        ])->header('Content-Type', 'text/xml');
    }

    public function categories()
    {
        $categories = DB::table('categories')->orderBy('created_at', 'desc')->get();
        return response()->view('sitemap.categories', [
            'categories' => $categories,
        ])->header('Content-Type', 'text/xml');
    }

}
