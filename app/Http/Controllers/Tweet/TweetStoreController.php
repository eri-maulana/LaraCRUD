<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetStoreController extends Controller
{
    public function __invoke(): RedirectResponse
    {

        $user = Auth::user();

        Tweet::create([
            'user_id' => $user->id,
            'name' => $user->name,
            'content' => request('content')
        ]);

        return redirect()->back();
    }
}