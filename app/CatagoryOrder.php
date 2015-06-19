<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatagoryOrder extends Model
{
    protected $table = 'catagory_order';
    protected $fillable = ['user_id', 'catagory_id', 'catagory_order'];
}
