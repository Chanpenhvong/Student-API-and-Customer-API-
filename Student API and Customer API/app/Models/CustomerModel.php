<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerModel extends Model
{
    use HasFactory;
    public $table="customer";
    public $primaryKey="ID";
    public $fillable=["CustomerName","Gender","Tell","Email","Nationality"];
    public $timestamps=false;
}
