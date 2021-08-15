<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 
        'last_name',
        'email',
        'country',
        'city',
        'district',
        'street',
        'building',
        'apartment_no',
        'address1',
        'address2',
        'phone',
        'credit_card',
    ];
}
