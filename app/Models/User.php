<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Orchid\Platform\Models\User as Authenticatable;
use ProtoneMedia\LaravelVerifyNewEmail\MustVerifyNewEmail;
use Illuminate\Auth\MustVerifyEmail as AuthMustVerifyEmail;

class User extends Authenticatable implements MustVerifyEmail
{

    use MustVerifyNewEmail, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'permissions',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'permissions',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'permissions'          => 'array',
        'email_verified_at'    => 'datetime',
    ];

    /**
     * The attributes for which you can use filters in url.
     *
     * @var array
     */
    protected $allowedFilters = [
        'id',
        'name',
        'email',
        'permissions',
    ];

    /**
     * The attributes for which can use sort in url.
     *
     * @var array
     */
    protected $allowedSorts = [
        'id',
        'name',
        'email',
        'updated_at',
        'created_at',
    ];


    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    public function reponses()
    {
        return $this->hasMany(Reponse::class);
    }

    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function centres()
    {
        return $this->hasMany(Centre::class);
    }

    public function favoris()
    {
        return $this->hasMany(Favori::class);
    }

    public function messages(){
        return $this->hasMany(Message::class);
    }
}
