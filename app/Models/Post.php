<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable=['title','body','img'];
    protected $table='posts';
    public function comments(){
        return $this->hasMany(Comment::class)->whereNull('parent_id');;
    }
}
