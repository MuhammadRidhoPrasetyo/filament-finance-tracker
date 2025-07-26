<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
        'finance_group_id',
        'category_id',
        'amount',
        'month',
        'year'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }

}
