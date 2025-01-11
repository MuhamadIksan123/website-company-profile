<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyKeypoint extends Model
{
    protected $fillable = [
        'keypoint',
        'company_about_id'
    ];
}
