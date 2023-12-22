<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Guest extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode', 'nama'
    ];
    // protected $guarded = [];
    protected $table = 'guests';
}
