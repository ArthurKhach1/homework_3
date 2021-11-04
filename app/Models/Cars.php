<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'color',
        'price',
        'categories_id',
        'user_id',
        'user_email',

    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
