<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

    public function question(){
        $this->hasMany('App\Question');
    }
}
