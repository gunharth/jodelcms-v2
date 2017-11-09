<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\DataFilter;
// use App\Item;

class Job extends Model
{

    use DataFilter;

    protected $fillable = [
        // 'client','project','job_status','notes'
    ];

    protected $filter = [
        'id', 'title'
    ];

    // public function items()
    // {
    //  return $this->hasMany(Item::class);
    // }
}
