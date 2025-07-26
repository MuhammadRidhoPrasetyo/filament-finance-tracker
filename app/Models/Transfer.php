<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'finance_group_id',
        'from_account_id',
        'to_account_id',
        'amount',
        'description',
        'date',
    ];

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }

    public function fromAccount()
    {
        return $this->belongsTo(Account::class, 'from_account_id');
    }

    public function toAccount()
    {
        return $this->belongsTo(Account::class, 'to_account_id');
    }

}
