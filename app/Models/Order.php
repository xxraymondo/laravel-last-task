<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'price'
    ];
    public function resturant(): BelongsTo
    {
        return $this->belongsTo(Resturant::class);
    }
}
