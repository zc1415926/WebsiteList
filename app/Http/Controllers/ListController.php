<?php

namespace App\Http\Controllers;

use App\ListItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ListController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($catagory_id)
    {
        $lists = ListItem::where('catagory_id', $catagory_id)->get();
        dd($lists);
    }
}
