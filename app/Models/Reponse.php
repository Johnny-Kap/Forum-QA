<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    use HasFactory;

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
