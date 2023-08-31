<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    public $timestamps =false;
    protected $fillable = [
        'first_name',
        'last_name'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
