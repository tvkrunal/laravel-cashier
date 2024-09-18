<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'plans';
    protected $guarded = ['id'];
    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
