<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    public $fillable=['title','slug','text','user_id','img'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
