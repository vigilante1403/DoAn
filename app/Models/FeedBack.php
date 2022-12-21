<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    use HasFactory;
    protected $table='feedback';
    protected $fillable=['id_feedback','id_user','text','username'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
