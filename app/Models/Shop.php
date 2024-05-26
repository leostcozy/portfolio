<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
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
    
    public function getPaginateByLimit(int $limit_count = 10)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}
