<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class capital extends Model
{
    protected $table ='transaction';
    protected $primaryKey = 'id';
    protected $fillable = ['date_tr','balance','information_tr','price_tr'];

    
}
