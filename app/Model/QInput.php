<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class QInput extends Model
{
    protected $table = "qinputs";

    public function question() {
        return $this->belongsTo(Question::class);
    }
}
