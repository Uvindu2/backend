<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['productName','prodctCategory','quantity','unitPrice','description','model','imageUrl','colour','cartStatus','updated_at','created_at'];

    
}


