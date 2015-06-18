<?php

namespace App\Http\Controllers;

use App\Catagory;
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

}
