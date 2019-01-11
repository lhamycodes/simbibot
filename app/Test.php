<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

    public function questions(){
        return $this->hasMany(Question::class, 'test_id');
    }
}
