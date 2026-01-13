<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'price', 'is_public', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
