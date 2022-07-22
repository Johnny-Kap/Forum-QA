<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reponse extends Model
{
    use HasFactory, AsSource;

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function questions(){
        return $this->belongsTo(Question::class, 'question_id', 'id');
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }

    public function votes(){
        return $this->hasMany(Vote::class);
    }
}
