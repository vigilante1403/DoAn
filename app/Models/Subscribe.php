<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Subscribe extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table='subscribe_email';
    protected $fillable=[
        'email','token'
    ] ;
    public $timestamps=false;
}
