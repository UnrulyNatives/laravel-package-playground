<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Unrulynatives\Helpers\UserExtensions;
// use Unrulynatives\Attitudes\UserAttitudes;
// use Unrulynatives\Helpers\ModelExtensions;

class User extends Authenticatable
{
    use Notifiable;
    use UserExtensions;
    // use UserAttitudes;
    // use ModelExtensions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    
    public function importances() {
        return $this->hasMany(\App\Models\Userattitude::class, 'creator_id');
    }
    
    public function attitudes() {
        return $this->hasMany(\App\Models\Userattitude::class, 'creator_id');
    }
        


}
