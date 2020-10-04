<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function getPages()
    {
        $pages = Pages::getPages();

        return response()->json($pages);
    }

    public function getPage(Request $request,$slug)
    {
        $slug = ($slug === 'home' ? '' : $slug);
        $page = Pages::getPage('/'.$slug);

        return response()->json($page);
    }
}
