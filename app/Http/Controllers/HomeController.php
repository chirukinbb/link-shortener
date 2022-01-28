<?php

namespace App\Http\Controllers;

use App\Facades\Slug;
use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function create(Request $request)
    {
        $url = $request->input('url');
        $data = Link::whereUrl($url)->first();

        if ($data)
            return route('link',['slug'=>$data->slug]);

        $slug = Slug::create();

        Link::create([
            'url'=>$url,
            'slug'=>$slug
        ]);

        return route('link', ['slug' => $slug]);
    }
}
