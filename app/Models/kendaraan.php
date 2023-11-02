<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = ['name', 'typeId', 'license', 'dailyprice', 'status'];

}
