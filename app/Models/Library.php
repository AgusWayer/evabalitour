<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Library extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
    public function destinations():HasMany {
        return $this->hasMany(Destinations::class);
    }
    public function packages(){
        return $this->hasMany(Packages::class);
    }
    public function gallery(){
        return $this->hasMany(Gallery::class);
    }
    public function articles(){
        return $this->hasMany(Gallery::class);
    }

}
