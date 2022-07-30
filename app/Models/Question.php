<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory, AsSource;

    public $keyType = 'string';

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

    public function favoris(){
        return $this->hasMany(Favori::class);
    }
}
