<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CustomerQueryReply extends Model
{
    //
    protected $fillable=['user_id','reply','customer_query_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
