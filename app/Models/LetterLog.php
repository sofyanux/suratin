<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'activity', 'surat_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function letter()
    {
        return $this->belongsTo(Letter::class, 'surat_id');
    }
}
