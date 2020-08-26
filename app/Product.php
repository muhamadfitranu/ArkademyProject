<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "tb_product";
    public $primaryKey = "id_product";
    public $timestamps = false;
    public $fillable = ['name_product','information','price','total'];
}
