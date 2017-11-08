<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    public function collection()
    {
        $this->belongsTo(App\Collection::class);
    }

}
