<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceGroup extends Model
{
    protected $fillable = [
        'user_id',
        'name'
    ];

    public function financeGroupUsers()
    {
        return $this->hasMany(FinanceGroupUser::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
