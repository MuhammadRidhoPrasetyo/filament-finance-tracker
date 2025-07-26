<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'finance_group_id',
        'account_id',
        'category_id',
        'type',
        'amount',
        'interval',
        'start_date',
        'end_date',
        'active'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function account()
    {
        return $this->belongsTo(Account::class);
    }

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }
}
