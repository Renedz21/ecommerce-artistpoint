<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const BORRADOR = 1;

    const PUBLICADO = 2;

    protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    //RELACION UNO A MUCHOS POLIMORFICA

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    //URL AMIGABLES
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
