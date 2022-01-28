<?php

namespace App\Services;

use App\Models\Link;
use Illuminate\Support\Str;

class SlugService
{
    public function create()
    {
        do {
            $slug = Str::random(5);
        } while (Link::whereSlug($slug)->first());

        return $slug;
    }
}
