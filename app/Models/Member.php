<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Member extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'organization_id',
        'password',
        'address',
        'photo'
    ];

    public function registerduser(){
        return $this->belongsTo(Organization::class,'organization_id');
    }
}
