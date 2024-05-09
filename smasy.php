<?php






namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class smasy extends Authenticatable implements AuthenticatableContract
{
    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        return 'id';
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    // You may also need to implement other methods like getRememberToken(), setRememberToken(), etc.


   
    protected $fillable = [
        'name',
        'student_ID', // Add any other attributes here that you want to allow mass assignment for
        'email',
        'password',
    ];

    // Your other model code...

}
