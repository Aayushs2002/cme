<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganizationUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'organization_id'
    ];

    public function org(){
        return $this->belongsTo(Organization::class, 'organization_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
