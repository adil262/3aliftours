<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchase extends Model
{
    protected $table ='transaction';
    protected $primaryKey = 'id';
    protected $fillable =['date_tr','information_tr','balance','price_tr'];

    public function account()
    {
        return $this->hasMany(account::class);
    }
    public function ticket()
    {
        return $this->hasMany(ticket::class);
    }
    public function supplier()
    {
        return $this->hasMany(supplier::class);
    }
}
