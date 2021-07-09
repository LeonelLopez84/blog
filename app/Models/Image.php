<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $fillable=['name','order','active'];

    public function articles()
    {
        return $this->belongsTo(Article::class);
    }
}
