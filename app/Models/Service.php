<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'name',
        'minimum_value',
        'amount_hours',
        'percentage',
        'bedroom_value',
        'bedroom_hours',
        'living_room_value',
        'living_room_hours',
        'bathroom_value',
        'bathroom_hours',
        'kitchen_value',
        'kitchen_hours',
        'yard_value',
        'yard_hours',
        'others_value',
        'others_hours',
        'icon',
        'position'
    ];
}
