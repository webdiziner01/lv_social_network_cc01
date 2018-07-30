<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class FriendController extends Controller
{

    public function getIndex(){

        $friends = Auth::user()->friends();
        $requests = Auth::user()->friendRequests();

        return view('friends.index', compact('friends','requests'));
    }
}
