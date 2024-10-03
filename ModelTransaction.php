<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['transaction_code', 'transaction_date', 'description'];

    public function details()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
