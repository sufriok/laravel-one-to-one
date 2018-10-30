<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;
class Profile extends Model
{
    protected $fillable = ['address', 'phone', 'job'];

    public function Member()
    {
        return $this->belongTo(Member::class);
    }
}
