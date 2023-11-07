<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';
    protected $guard = [];
    protected $fillable = ['Part_number','Description','Category_id','Brand_id','Uom_id','Type','price','currency','remarks','image'];
}
