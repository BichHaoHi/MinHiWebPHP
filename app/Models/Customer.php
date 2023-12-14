<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';//chỉ định tên của bảng trong cơ sở dữ liệu mà model đó tương ứng với
    protected $fillable = [
        'name',
        'address',
        'phone',
        'postcode',
        'email',
        'birthday',
        'total',
        'enable',
        'password',
        
    ];

    protected $casts = [
        'quantity' => 'double',
        'name' => 'text',
        'address' => 'text',
        'phone' => 'text',
        'postcode' => 'text',
        'email'=> 'text',
        'birthday'=> 'datetime',
        'total' => 'double',
        'enable' => 'boolean',
        'password' => 'hashed',
    ];
}

