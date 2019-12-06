<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    //Establece laRelación de muchos a muchos con el modelo Role.
    public function roles()
    {
        return $this->belongsToMany('App\Role');
    }

    /**
     * Verifica si un usario tiene cierto Rol. 
     */
    public function hasRole($role)
    {
        if($this->roles()->where('name',$role)->first())
        {
            return true;
        }
        return false;
    }
    /**
     * Por si un usuario tiene varios roles, recibe un arreglo de roles.
     */
    public function hasAnyRole($roles)
    {
        if(is_array($roles)){//Por si recibe un arreglo de roles.
            foreach($roles as $role)
            {
                if($this->hasRole($role)){
                    return true;
                }
            }
        }
        else{
            if($this->hasRole($roles))//Por si no se recibe un arreglo
            {
                return true;
            }
        }
        return false;
    }

    /**
     * Función que permite el acceso a cirta funcionalidad al usuario.
     */
    public function authorizeRoles($roles)
    {
        if($this->hasAnyRole($roles))
        {
            return true;
        }
        abort(401,'Acción No Autorizada Sin Permiso');
    }






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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
