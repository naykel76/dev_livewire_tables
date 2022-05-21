<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $casts = [
        'order_date' => \Naykel\Gotime\Casts\DateCast::class,
        'due_date' => \Naykel\Gotime\Casts\DateCast::class,
        'amount' => \Naykel\Gotime\Casts\CurrencyCast::class,
    ];

    public function order()
    {
        return $this->belongsTo(User::class);
    }
}
