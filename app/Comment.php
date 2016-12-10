<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'comments';
    protected $fillable = [
    	'body',
    	'date_entered',
    	'date_modified',
    	'status',
    	'type',
        'deleted',
        'author_id',
    ];

    public function post() 
    {
    	return $this->belongsTo('App\Post');
    }

    public function author()
    {
        return $this->belongsTo('App\User');
    }    
}
