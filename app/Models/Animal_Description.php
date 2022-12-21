<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal_Description extends Model
{
    use HasFactory;
    protected $table='animal-description';
    protected $fillable=['beard_colors','weight','personality_traits','fact','favorite_items','related_to','name_animal'];
    public function animal(){
        return $this->belongsTo(Animal::class);
    }
}
