<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'from_crypto',
        'to_currency',
        'amount',
    ];

    // Relationship: A conversion belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
