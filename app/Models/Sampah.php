<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sampah extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
