<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
    ];

    // location have many house 
    public function houses()
    {
        return $this->hasMany(House::class);
    }
}
