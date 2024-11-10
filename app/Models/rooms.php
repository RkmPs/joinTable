<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rooms extends Model
{
    use HasFactory;

    protected $fillable = ['type_room', 'price', 'status'];

    public function roomType()
    {
        return $this->belongsTo(roomType::class, 'type');
    }
}
