<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Centre extends Model
{
    use HasFactory, AsSource;

    protected $fillable = [
        'label',
        'user_id',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function questions(){
        return $this->hasMany(Question::class);
    }
}
