<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $table = 'houses';
    protected $primaryKey = 'id';
    protected $fillable = [
        'title',
        'description',
        'locations_id',
        'categories_id',
    ];

    // house have one location
    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    // house have one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // house have many image
    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
