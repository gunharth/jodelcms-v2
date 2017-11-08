<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\JobDataFilter;
// use App\Item;

class Job extends Model
{

    use JobDataFilter;

    protected $fillable = [
        'client','project','job_status','notes'
    ];

    protected $filter = [
        'id', 'client', 'client_ref', 'job_status', 'order_type', 'shipping_date', 'shipping_notes'
    ];

    // public function items()
    // {
    //  return $this->hasMany(Item::class);
    // }
}
