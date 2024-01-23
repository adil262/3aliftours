<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $table = 'supplier';
    protected $primaryKey = 'id';
    protected $fillable = ['name_sup','nohp_sup','address_sup','email_sup'];

    public function purchase()
    {
        return $this->belongsTo(purchase::class);
    }
}
