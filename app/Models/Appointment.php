<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'phone_number',
        'name',
        'email',
        'meeting_at',
        'budget',
        'brief',
        'product_id'
    ];

    protected $cast = [
        'meeting_at' => 'date'
    ];

    public function product() {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
