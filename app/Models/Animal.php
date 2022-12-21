<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable=['name','price','img_path'];
    protected $table='adopt-an-animal';
    
    public function animal_description(){
        return $this->belongsTo(Animal_Description::class);
    }
}
