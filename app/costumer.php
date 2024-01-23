<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class costumer extends Model
{
    protected $table = 'costumer';
    protected $primaryKey = 'id';
    protected $fillable = ['name_cos','nohp_cos','address_cos','email_cos'];
    
    public function sales()
    {
        return $this->belongsTo(sales::class);
    }
}
