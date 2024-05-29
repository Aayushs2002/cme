<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmeRegistration extends Model
{
    use HasFactory;
    protected $fillable = [
        'member_id',
        'cme_id',
        'name',
        'email',
    ];

    public function member(){
        return $this->belongsTo(Member::class,'member_id','id');
    }

    public function cme(){
        return $this->belongsTo(CmeProgram::class,'cme_id','id');

    }

}
