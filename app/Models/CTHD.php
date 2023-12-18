<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CTHD extends Model
{
    use HasFactory;
    protected $table = 'cthd';//chỉ định tên của bảng trong cơ sở dữ liệu mà model đó tương ứng với
    protected $fillable = [
        'idDonHang'=> 'integer',
        'idProduct'=> 'integer',
        'quantity'=> 'integer',
        'price' => 'double',
    
    ];
}
