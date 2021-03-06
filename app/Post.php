<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Post extends Model
{
    protected $fillable=['author','description'];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
