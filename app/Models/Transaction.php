<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function detail_transaction()
    {
        return $this->hasMany(DetailTransaction::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
