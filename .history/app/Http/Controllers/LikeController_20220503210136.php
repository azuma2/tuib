<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\LikeController;

class LikeController extends Controller
{




public function store(Request $request)
{
    $item = Like::create($request->all());
    return response()->json([
    'data' => $item
    ], 201);
}


public function destroy(Request $request)
{
    $item = Like::where('id', $request->id)->delete();
    if ($item) {
    return response()->json([
        'message' => 'Deleted successfully',
    ], 200);
    } else {
    return response()->json([
        'message' => 'Not found',
    ], 404);
    }
}



}