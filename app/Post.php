<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'posts';
    protected $fillable = [
    	'title',
    	'body',
    	'date_entered',
    	'date_modified',
    	'status',
    	'type',
        'deleted',
        'author_id',
    ];

    public function comments() 
    {
    	return $this->morphMany('App\Comment', 'commentable');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }    
}
