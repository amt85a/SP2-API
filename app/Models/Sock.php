<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sock extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'amount',
        'description',
        'isInStock',
        'booking_id'
    ];
}
