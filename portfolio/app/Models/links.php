<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class links extends Model
{
    public $table = 'links';
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
