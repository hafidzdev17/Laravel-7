<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Post extends Model
{

    protected $fillable = ['name', 'email', 'age', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
