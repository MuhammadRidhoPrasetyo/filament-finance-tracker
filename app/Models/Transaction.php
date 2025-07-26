<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'finance_group_id',
        'account_id',
        'category_id',
        'type',
        'amount',
        'description',
        'date',
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

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'transaction_tags');
    }
}
