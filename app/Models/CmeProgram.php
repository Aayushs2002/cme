<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CmeProgram extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'start_date',
        'status',
        'organization_id'
    ];


    public function program(){
        return $this->belongsTo(Organization::class,'organization_id');
    }
    
    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }
}
