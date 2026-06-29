<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    protected $fillable = [
        "product_id",
        "name",
        "description",
        "processor",
        "memory",
        "storage",
    ];

    public function product() {
        return $this->belongsTo(Product::class);
    }
}
