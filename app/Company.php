<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $table = 'companies';

    public function users()
    {
        return $this->hasMany(User::class, 'idCompany', 'id');
    }
}
