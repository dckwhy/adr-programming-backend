<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethodDetails extends Model
{
    use HasFactory;

    protected $fillable = ['payment_methods_id', 'name', 'img'];

    public function payment_method()
    {
        return $this->belongsTo(PaymentMethod::class);
    }
}
