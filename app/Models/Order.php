<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class Order extends Model
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

    public function company()
    {
        return $this->belongsTo(Company::class, 'company_uuid', 'uuid');
    }
    
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_uuid', 'uuid');
    }
}
