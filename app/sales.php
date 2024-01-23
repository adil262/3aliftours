<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sales extends Model
{
    protected $table ='transaction';
    protected $primaryKey = 'id';
    protected $fillable =['date_tr','information_tr','balance','price_tr'];

    public function account()
    {
        return $this->hasMany(account::class);
    }
    public function costumer()
    {
        return $this->hasMany(costumer::class);
    }
    public function ticket()
    {
        return $this->hasMany(ticket::class);
    }
}
