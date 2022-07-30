<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Vote extends Model
{
    use HasFactory, AsSource;

    public $keyType = 'string';

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function reponses(){
        return $this->belongsTo(Reponse::class, 'reponse_id', 'id');
    }
}
