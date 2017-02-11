<?php

namespace App\Http\Controllers\Site;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SiteController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return Response
     */
    public function index()
    {
        $categories = Category::all();
        \Debugbar::warning('lista de categorias');

        return view('site.site')->with(compact('categories'));
    }
}
