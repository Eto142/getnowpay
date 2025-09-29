<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'amount',
        'bank_name',
        'account_name',
        'account_number',
        'swift_code',
        'narration',
        'status',
    ];

    /**
     * Relationship: A withdrawal belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
