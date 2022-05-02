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




    public function store(Post $item)
   {
       $user = Auth::user();
       if($user->id != $item->user_id) {
          if($item->isLiked(Auth::id())) {
               // 対象のレコードを取得して、削除する。
               $delete_record = $item->getLike($user->id);
               $delete_record->delete();
           } else {
             $like = Like::firstOrCreate(
                   array(
                       'user_id' => Auth::user()->id,
                       'post_id' => $item->id
                   )
               );
           }
       }
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