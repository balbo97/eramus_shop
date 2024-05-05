<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Relazione one to many con prodotti
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
