<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    public $table = 'projects';
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
