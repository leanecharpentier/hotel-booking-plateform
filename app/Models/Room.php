<?php

namespace App\Models;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable = [
        'hotel_id',
        'numero',
        'price',
        'capacity',
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
