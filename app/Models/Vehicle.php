<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = ['chassis_number', 'title', 'description', 'image'];

    public function vehicle_model(): BelongsTo
    {
        return $this->belongsTo(VehicleModel::class);
    }

    public function manufacturer(): HasOneThrough
    {
        return $this->hasOneThrough(Manufacturer::class, VehicleModel::class);
    }
}
