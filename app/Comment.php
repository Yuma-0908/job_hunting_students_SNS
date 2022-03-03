<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'title',
        'body',
        'company_id'
        ];
    
    public function getPaginateByLimit(int $limit_count = 5){
        return $this::with('company')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function company()
    {
    return $this->belongsTo('App\Company');
    }
}
