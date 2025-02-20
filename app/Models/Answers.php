<?php

namespace App\Models;

use App\Models\Questions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Answers extends Model
{
    use HasFactory;

    protected $fillable = ['answer', 'is_correct'];

    public function question()
    {
        return $this->belongsTo(Questions::class);
    }
}
