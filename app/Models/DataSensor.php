<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DataSensor extends Model
{
    use HasFactory;

    public function sampah()
    {
        return $this->belongsTo(Sampah::class);
    }
}
