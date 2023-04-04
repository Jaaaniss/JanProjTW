<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vans extends Model
{
    protected $table = 'vans';
    public $incrementing = true;
    public $timestamp = false;
    protected $fillable =
    [
    'cm',
    'eu',
    'uk',
    'usm',
    'usw'
    ];
    use HasFactory;
}
