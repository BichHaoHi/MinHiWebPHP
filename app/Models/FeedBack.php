<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $fillable = ['name', 'phone', 'desc','product_id'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Products()
    {
        return $this->belongsTo(Product::class);
    }
}
