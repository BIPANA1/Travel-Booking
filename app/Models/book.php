<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    use HasFactory;
    protected $fillable=['name','email','address','phone','where','arrival','leaving'];

    public function Details()
    {
        return $this->hasMany(details::class);
    }
}
