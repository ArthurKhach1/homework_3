<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'user_id',
        'user_name',
        'category_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
