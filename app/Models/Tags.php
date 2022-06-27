<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tags extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'title',
        'detail'
    ];

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
