<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\ListItem;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class ListController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($catagory_id)
    {
        $lists = ListItem::where('catagory_id', $catagory_id)->get();
        $catagory_name = Catagory::where('id', $catagory_id)->get()[0]['catagory_name'];

        return view('lists.index', compact('catagory_id', 'lists', 'catagory_name'));
    }

    public function add(Request $request)
    {
        $listitem = ListItem::create(['catagory_id'     => $request['category_id'],
                                      'list_item_name'  => $request['txtListitemName'],
                                      'list_item_url'   => $request['txtListitemUrl']]);

        if($listitem)
        {
            Flash::success("Success to add a new list item");
            return back();
        }

        Flash::danger("Failure to add the list item!");
        return back()->withInput();
    }

    public function delete(Request $request)
    {
        if(ListItem::destroy($request['txtDeleteListitemId']))
        {
            Flash::success("success to delete the list item");

            return back();
        }

        Flash::danger("Failure to delete the list item");
        return back();
    }

    public function edit(Request $request)
    {
        if(ListItem::where('id', $request['listId'])
            ->update(['list_item_name' => $request['txtListitemName'],
                      'list_item_url'  => $request['txtListitemUrl']]))
        {
            Flash::success('Success to edit the list item');
            return back();
        }
        Flash::danger("Failure to edit the list item");
        return back();
    }
}
