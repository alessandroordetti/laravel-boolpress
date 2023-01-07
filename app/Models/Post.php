<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
/*     protected $fillable = array('title', 'author', 'description', 'image');
 */
    public function categories(){
        return $this->belongsToMany('App\Category');
    }
    
}
