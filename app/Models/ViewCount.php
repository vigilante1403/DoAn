<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewCount extends Model
{
    use HasFactory;
    protected $table='views_count';
    protected $fillable=['reads'];
    public function incrementReadCount() {
        $this->reads++;
        return $this->save();
    }
    public $timestamps=false;
}
