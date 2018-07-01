<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issues extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Users', 'user_id');
    }
}
