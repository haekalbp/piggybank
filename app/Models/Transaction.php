<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'user_id', 'category_id', 'total', 'title', 'type'];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    
    public function user() {
        return $this->belongsTo(User::class);
    }
}
