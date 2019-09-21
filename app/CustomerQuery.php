<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerQuery extends Model
{
    //
    protected $fillable=['title','description','image','user_id'];

    public function replies()
    {
    	return $this->hasMany('App\CustomerQueryReply');
    }
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
