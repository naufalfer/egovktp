<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $password
 */
class Login extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'login';

    /**
     * @var array
     */
    protected $fillable = ['username', 'password'];

}
