<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'category_id', 'sender', 'receiver', 'sent_at'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function archive()
    {
        return $this->hasOne(Archive::class);
    }
}
