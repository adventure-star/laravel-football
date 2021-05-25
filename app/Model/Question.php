<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = "questions";

    public function qinputs() {
        return $this->hasMany(QInput::class, 'qid', 'id');
    }

}
