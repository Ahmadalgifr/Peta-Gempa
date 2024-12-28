<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Regencies extends Model
{
    use HasFactory;
    protected $table = 'regencies';
    protected $fillable =[ 'name', 'alt_name', 'latitude', 'longitude', 'provinces_id'];


    function provinces(){
        return $this->belongsTo(provinces::class);
    }
}

