<?php

namespace App\Models;

use App\Models\Answers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Questions extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'is_answered'];

    public function answers()
    {
        return $this->hasMany(Answers::class);
    }
}
