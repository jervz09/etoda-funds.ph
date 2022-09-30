<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'gender',
        'mobile_number',
        'address',
        'toda_group',
        'plate_number',
        'photo_url',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'member_id', 'id');
    }

    public function loans()
    {
        return $this->hasMany(Loan::class, 'member_id', 'id');
    }
}
