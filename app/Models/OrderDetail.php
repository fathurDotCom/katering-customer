<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class OrderDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected static function booted()
    {
        static::creating(function ($user) {
            $user->uuid = Uuid::uuid4()->toString();
        });
    }

    protected $guarded = ['id', 'uuid'];
    protected $hidden = ['id'];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_uuid', 'uuid');
    }
    
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_uuid', 'uuid');
    }
}
