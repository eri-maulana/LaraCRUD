<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class TweetEditController extends Controller
{
    public function __invoke($id): View
    {

        $tweet = Tweet::find($id);

        // if ($tweet->user_id != Auth::id()) {
        //     abort(401);
        // } 

        $this->authorize('update', $tweet);       

        return view('tweets.edit', [
            'tweet' => Tweet::find($id)
        ]);
    }
}