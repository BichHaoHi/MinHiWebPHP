<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $table = 'feedbacks';
    // protected $fillable = ['name', 'phone', 'enable', 'desc', 'point', 'idUser', 'idProduct'];

    public function user() {
        return $this->belongsTo(User::class,'idUser');
    }

    public function product() {
        return $this->belongsTo(Product::class, 'idProduct');
    }
}
