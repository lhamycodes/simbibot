<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $table = "super_exams";

    public function tests()
    {
        return $this->hasMany(Test::class, 'super_exam_id');
    }
}
