<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomType extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'kapasitas', 'description'];

    public function rooms()
    {
        return $this->hasMany(rooms::class, 'type');
    }
}

