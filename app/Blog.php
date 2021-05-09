<?php

use App\User;
use App\Comment;
namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'tag',
        'blog_body',
        'image',
        ];

   

    public function user(){
        return $this->bleongsTo('App\User');
    }
    
}
