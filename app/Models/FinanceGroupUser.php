<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FinanceGroupUser extends Model
{
    protected $fillable = [
        'finance_group_id',
        'user_id',
        'role',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }
}
