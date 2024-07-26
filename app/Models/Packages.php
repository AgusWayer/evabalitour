<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packages extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    public function library(){
        return $this->belongsTo(Library::class);
    }
    public static function getAllPackages(){
        return self::all();
    }
}
