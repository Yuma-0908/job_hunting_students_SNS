<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'logo',
        'name',
        'address',
        'potision',
        'president',
        'capital',
        'employees',
        ];
    
    public function getPaginateByLimit(int $limit_count = 5){
        return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function comments()   
    {
    return $this->hasMany('App\Comment');  
    }
}
