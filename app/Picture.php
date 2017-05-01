<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Picture extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'gallery';
    protected $fillable = [
        'title',
        'caption',
        'submitted_by_id',
        'image_url',
    ];

    public function submitted_by()
    {
        return $this->belongsTo('App\User');
    }
}
