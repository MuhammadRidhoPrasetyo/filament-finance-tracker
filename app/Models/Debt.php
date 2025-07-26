<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{
    protected $fillable = [
        'finance_group_id',
        'contact_name',
        'type',
        'amount',
        'paid',
        'due_date',
        'notes',
    ];

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }

}
