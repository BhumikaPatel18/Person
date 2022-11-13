<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table='posts';
    protected $primarykey='id';
    protected $fillble=['name','DOB','age','phone_no','email','gender','hobby','description'];
}
