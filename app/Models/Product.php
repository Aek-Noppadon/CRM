<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code',
        'product_name',
        'brand',
        'supplier_rep',
        'principal',
        'status',
        'source',
        'created_user_id',
        'updated_user_id',
    ];

    public function userCreated()
    {
        return $this->belongsTo(User::class, 'created_user_id');
    }

    public function userUpdated()
    {
        return $this->belongsTo(User::class, 'updated_user_id');
    }

    public function setProductNameAttribute($value)
    {
        $this->attributes['product_name'] = strtoupper(trim($value));
    }

    public function setBrandAttribute($value)
    {
        $this->attributes['brand'] = strtoupper(trim($value));
    }

    public function setSupplierRepAttribute($value)
    {
        $this->attributes['supplier_rep'] = strtoupper(trim($value));
    }

    public function setPrincipalAttribute($value)
    {
        $this->attributes['principal'] = strtoupper(trim($value));
    }
}
