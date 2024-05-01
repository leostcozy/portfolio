<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory
    protected $fillable = [
        'name',
        'introduction',
        'address',
        'post_code',
        'phone_number',
        'opening_time',
        'closing_time',
        'regular_holiday',
        'sns_account',
        'official_website',
    ];


}
