<?php

namespace App\Http\Controllers;

use App\Models\Link;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();

        return view('links',compact('links'));
    }
    public function relocate($slug)
    {
        $data = Link::whereSlug($slug)->first();

        return $data ?
            redirect()->to($data->url) :
            redirect()->route('links');
    }
}
