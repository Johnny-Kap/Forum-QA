<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function centres(){
        return $this->belongsTo(Centre::class, 'centre_id', 'id');
    }

    public function reponses(){
        return $this->hasMany(Reponse::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function tags(){
        return $this->belongsTo(Tags::class, 'tags_id', 'id');
    }

    public function vues(){
        return $this->hasMany(Vue::class);
    }
}
