<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'id';
    protected $fillable = ['tgl_flight','tgl_return','maskapai','route'];
}

