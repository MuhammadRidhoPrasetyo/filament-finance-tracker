<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'finance_group_id',
        'title',
        'message',
        'read',
        'triggered_at',
    ];

    public function financeGroup()
    {
        return $this->belongsTo(FinanceGroup::class);
    }
}
