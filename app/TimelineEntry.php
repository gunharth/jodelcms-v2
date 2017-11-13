<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\DataFilter;
use Carbon\Carbon;

class TimelineEntry extends Model
{
    use DataFilter;

    protected $fillable = [
        'title'
    ];

    protected $filter = [
        'id', 'title', 'started_at'
    ];

    public function getStartedAtAttribute($date) {
        if($date != '0000-00-00') {
            return Carbon::parse($date)->format('d.m.Y');
        } else {
            return '';
        }
    }
}
