<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class account extends Model
{
    protected $table = 'account';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name_account'];

    public function transaction()
    {
        return $this->belongsTo(transaction::class);
    }
}
