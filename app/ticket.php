<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'id';
    protected $fillable = ['name_ticket','type_ticket','lenght','price'];

    public function transaction()
    {
        return $this->belongsTo(transaction::class);
    }
}
