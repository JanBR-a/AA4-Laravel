<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = [
        'model',
        'description',
        'price',
        'stock',
        'image',
        'manufacturer',
        'release_date',
        'os',
        'imei'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}


