<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'checkin',
        'time',
        'guests',
    ];

    public function user()
{
    return $this->hasOne(User::class, 'user_id');
}
}
