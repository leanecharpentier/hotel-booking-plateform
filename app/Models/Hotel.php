<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'stars',
        'email',
        'telephone',
    ];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
