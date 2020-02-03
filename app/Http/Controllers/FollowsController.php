<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // we need this to not allow for not a user to follow
    }

    public function store(User $user)
    {
        return auth()->user()->following()->toggle($user->profile);
    }
}
