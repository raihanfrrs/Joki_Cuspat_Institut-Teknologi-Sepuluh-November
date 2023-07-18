<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DefaultPattern extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
