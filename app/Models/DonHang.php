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
    // quan hệ đơn - khách
    public function user(){
        return $this->belongsTo(User::class);
    }
// quan hệ đơn và sp
public function product()
{
    return $this->belongsToMany(Product::class, 'cthd', 'idDonHang', 'idProduct')
        ->withPivot('quantity', 'price');
}

}
