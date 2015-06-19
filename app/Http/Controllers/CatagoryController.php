<?php

namespace App\Http\Controllers;

use App\Catagory;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;

class CatagoryController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        if(Catagory::create(['user_id' => Auth::user()->id,
                             'catagory_name' => $request['catagory_name']]))
        {
            Flash::success("Success to add a new catagory!");
            return redirect('listmanager');
        }

        Flash::danger("Failure to add the catagory!");
        return redirect('listmanager');


    }

    public function edit(Request $request)
    {
        if(Catagory::where('id', $request['catagory_id'])
            ->update(['catagory_name' => $request['catagory_name']]))
        {
            Flash::success("Success to change your catagory name!");
            return redirect('listmanager');
        }

        Flash::danger("Failure to change the catagory name!");
        return redirect('listmanager');
    }

    public function delete(Request $request)
    {
        //dd($request['catagory_name']);
        if(Catagory::destroy($request['catagory_id']))
        {
            Flash::success("Success to delete the catagory !");
            return redirect('listmanager');
        }

        Flash::danger("Failure to delete the catagory!");
        return redirect('listmanager');
    }

}
