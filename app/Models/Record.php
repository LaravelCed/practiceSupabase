<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = 'record';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'task'
    ];
}
