<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'houses_id',
    ];

    // image have one house
    public function category()
    {
        return $this->belongsTo(House::class);
    }
}
