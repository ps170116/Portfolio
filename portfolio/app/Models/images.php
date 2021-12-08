<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class images extends Model
{
    public $table = 'images';
    use HasFactory;
    public $timestamps = false;
    protected $guarded = [    ];

    protected $primaryKey = 'id';
    protected $keyType = 'string';
}
