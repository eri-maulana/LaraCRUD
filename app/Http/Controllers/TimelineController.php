<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TimelineController extends Controller
{
    public function __invoke(): View
    {
        return view('timeline', [
            'tweets' => Tweet::latest('id')->get(),
        ]);
    }
}
