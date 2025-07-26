<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'finance_group_id',
        'name'
    ];

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }
}
