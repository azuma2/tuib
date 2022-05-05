<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','post_id'];

    public static $rules = array(
        'user_id' => 'text',
        'post_id' => 'integer',

    );

    public function user(){ 
      return $this->belongsTo('App\Models\user');
    }

    
    public function post()
    {
      return $this->belongsTo(Post::class);
    }

  public function isLiked($user_id)
{
  return $this->likes()->where('user_id', $user_id)->exists();
}

}