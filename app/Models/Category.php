<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'finance_group_id',
        'name',
        'type',
    ];

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }
}
