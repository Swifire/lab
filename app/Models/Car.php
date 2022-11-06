<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['price', 'description', 'image', 'brand_id', 'colour_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function colour()
    {
        return $this->belongsTo(Colour::class);
    }
}
