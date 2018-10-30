<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Profile;

class Member extends Model
{
    protected $fillable =['name', 'email', 'age'];

    public function Profile()
    {
        return $this->hasOne(Profile::class);
    }
}
