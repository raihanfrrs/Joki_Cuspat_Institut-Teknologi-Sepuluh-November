<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function custom_pattern()
    {
        return $this->hasMany(CustomPattern::class);
    }

    public function default_pattern()
    {
        return $this->hasMany(DefaultPattern::class);
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }
}
