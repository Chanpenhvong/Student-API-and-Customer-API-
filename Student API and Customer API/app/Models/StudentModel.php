<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    use HasFactory;

    public $table="front";
    public $primaryKey="sid";
    public $fillable=["name","tell"];
    public $timestamps=false;
}
