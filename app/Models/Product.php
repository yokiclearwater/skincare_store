<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;
use Laravel\Scout\Attributes\SearchUsingPrefix;

class Product extends Model
{
    use HasFactory, Searchable;


    protected $table = 'products';
    protected $primarykey = 'id';

    protected $fillable = [
        'name',
        'price',
        'category',
        'description',
        'image',
    ];

    #[SearchUsingPrefix('name')]
    public function toSearchableArray() {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'category' => $this->category,
            'description' => $this->description,
            'image' => $this->image,
        ];
    }

    public function carts() {
        return $this->hasMany(Cart::class, 'user_id');
    }
}
