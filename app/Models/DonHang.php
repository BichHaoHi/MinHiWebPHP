<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    use HasFactory;
    protected $table = 'don_hang';//chỉ định tên của bảng trong cơ sở dữ liệu mà model đó tương ứng với
    protected $fillable = [
        'name'=> 'string',
        'address'=> 'string',
        'date'=> 'string',
        'phone' => 'string',
        'status'=> 'string',
        'enable' => 'boolean',
        'total'=>'double',
        'idCus' => 'integer'
    ];

    protected $casts = [
        
    ];
}
