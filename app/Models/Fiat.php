<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fiat extends Model
{
    //
        /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_id',
        'amount',
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
