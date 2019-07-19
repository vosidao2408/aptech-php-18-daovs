<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = (['title','slug','description','content','view']);
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
