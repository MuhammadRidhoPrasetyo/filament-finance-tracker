<?php

namespace App\Models;

use App\Models\FinanceGroup;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    protected $fillable = [
        'finance_group_id',
        'name',
        'initial_balance',
        'type'
    ];

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }
}
