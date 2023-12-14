<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';//chỉ định tên của bảng trong cơ sở dữ liệu mà model đó tương ứng với
    protected $fillable = [
        'name',
        'type',
        'provider',
        'sex',
        'skin_problem',
        'skin_type',
        'description',
        'quantity',
        'price',
        'price_todel',
        'link_photo',
        'photo1',
        'photo2',
        'photo3',
    ];

    protected $casts = [
        'quantity' => 'double',
        'price' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
