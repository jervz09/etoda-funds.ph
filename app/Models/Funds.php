<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funds extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'amount',
        'current',
        'source'
    ];

    public function funds() {
        return $this->hasOne(Funds::class, 'id', 'member_id');
    }
}
