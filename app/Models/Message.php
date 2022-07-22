<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Orchid\Screen\AsSource;

class Message extends Model
{
    use HasFactory, AsSource;

    protected $fillable = ['user_id', 'message'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
