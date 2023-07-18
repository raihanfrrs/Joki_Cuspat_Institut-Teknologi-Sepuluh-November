<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function custom_pattern()
    {
        return $this->hasMany(CustomPattern::class);
    }

    public function favorite()
    {
        return $this->hasMany(Favorite::class);
    }

    public function temp_cart()
    {
        return $this->hasMany(TempCart::class);
    }

    public function transaction()
    {
        return $this->hasMany(Transaction::class);
    }
}
