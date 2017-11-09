<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\DataFilter;

class TimelineEntry extends Model
{
    use DataFilter;

    protected $fillable = [
        'title'
    ];

    protected $filter = [
        'id'
    ];
}
