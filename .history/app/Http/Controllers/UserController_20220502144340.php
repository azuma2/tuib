<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\UserController;

class UserController extends Controller
{

public function store(Request $request)
{
    $item = User::create($request->all());
    return response()->json([
    'name' => $item
    
    ], 201);
}



public function show(User $user)
{
    $item = User::find($user);
    if ($item) {
    return response()->json([
        'name' => $item
    ], 200);
    } else {
    return response()->json([
        'message' => 'Not found',
    ], 404);
    }
}

  }