<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'member_id',
        'amount',
        'release_date',
        'maturity_date',
        'interest',
        'terms',
        'balance',
        'status',
    ];

    public function member() {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
}
