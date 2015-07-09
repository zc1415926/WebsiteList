<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListItem extends Model
{
    protected $table = 'list_items';
    protected $fillable = ['catagory_id', 'list_item_name', 'list_item_url'];
}
