<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=[
        'parent_id',  /* replies parent comment's id */
        'user_id',
        'blog_id',
        'comment_body'
    ];

    public function blog(){

		return $this->belongsTo('App\Blog');
	}

	public function user(){

		return $this->belongsTo('App\User');
	}

	


}
