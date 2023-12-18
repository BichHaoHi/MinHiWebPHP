<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';//chỉ định tên của bảng trong cơ sở dữ liệu mà model đó tương ứng với
    protected $fillable = [
        'name'=>'string',
        'type'=>'string',
        'provider'=>'string',
        'sex'=>'string',
        'skin_problem'=>'string',
        'skin_type'=>'string',
        'description'=>'string',
        'quantity'=>'integer',
        'price'=>'double',
        'price_todel'=>'double',
        'link_photo',
    ];

    protected $casts = [
        'quantity' => 'double',
        'price' => 'double',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
