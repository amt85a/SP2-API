<?php

namespace App\Models;

use App\Http\Controllers\api\v1\AgencyController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'reference',
        'user_id',
        'state_id',
        'agency_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function agency() {
        return $this->belongsTo(Agency::class);
    }
}
