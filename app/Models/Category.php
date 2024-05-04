<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    const CREATED_AT = null;
    const UPDATED_AT = null;

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
