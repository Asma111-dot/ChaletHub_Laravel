<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'chalet_id',
        'check_in_date',
        'total_price',
        'deposit_price',
        'number_of_guests',
        'booking_status',
        'special_requests'
    ];

    public function chalet()
    {
        return $this->belongsTo(Chalet::class);
    }
}
