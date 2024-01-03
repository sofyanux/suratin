<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Archive extends Model
{
    use HasFactory;

    protected $fillable = ['letter_id', 'location', 'status'];

    public function letter()
    {
        return $this->belongsTo(Letter::class, 'letter_id');
    }
}
