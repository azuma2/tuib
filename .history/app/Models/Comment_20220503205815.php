<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_id', 'content'];

    public static $rules = array(
        'user_id' => 'text',
        'post_id' => 'integer',
        'content' => 'required|max:120',
    );

    public function user(){ 
        return $this->belongsTo('App\Models\user');
    }

    public function post()
    {
      return $this->belongsTo(Post::class);
  }

}