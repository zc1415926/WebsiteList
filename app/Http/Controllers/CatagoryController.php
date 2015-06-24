<?php

namespace App\Http\Controllers;

use App\Catagory;
use App\CatagoryOrder;
use Auth;
use DB;
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
        $user_id = Auth::user()->id;
        $maxCatagoryOrder = DB::select('SELECT
            Max(catagory_order.catagory_order) AS max_order
            FROM
            catagory_order
            WHERE
            catagory_order.user_id = ?' , [$user_id]
        );
        //dd($maxCatagoryOrder[0]->max_order);
        $catagory = Catagory::create([
                'user_id' => $user_id,
                'catagory_name' => $request['catagory_name']
            ]);

        if($catagory)
        {
            $catagoryOrder = CatagoryOrder::create([
                'user_id' => $user_id,
                'catagory_id' => $catagory->id,
                'catagory_order' => $maxCatagoryOrder[0]->max_order + 1
            ]);
            if($catagoryOrder)
            {
                Flash::success("Success to add a new catagory!");
                return redirect('listmanager');
            }
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
        $user_id = Auth::user()->id;
        $deleteCatagoryId = $request['catagory_id'];
        //dd($deleteCatagoryId);
        $deletedRequestOrder = DB::select('
            SELECT
                catagory_order.catagory_order
            FROM
                catagory_order
            WHERE
                catagory_order.catagory_id = ?', [$deleteCatagoryId]
        );
        //dd($deletedRequestOrder[0]->catagory_order);


        if(Catagory::destroy($deleteCatagoryId) && CatagoryOrder::destroy(['catagory_id' => $deleteCatagoryId]))
        {
            $updateCatagoryOrder = DB::update('
                UPDATE catagory_order
                SET catagory_order.catagory_order = catagory_order.catagory_order - 1
                WHERE
                    catagory_order.catagory_order > ?
                AND catagory_order.user_id = ?', [$deletedRequestOrder[0]->catagory_order, $user_id]
            );

            if($updateCatagoryOrder)
            {
                Flash::success("Success to delete the catagory !");
                return redirect('listmanager');
            }

            Flash::danger("Failure to delete the catagory!");
            return redirect('listmanager');
        }

        Flash::danger("Failure to delete the catagory!");
        return redirect('listmanager');
    }

    public function reorder(Request $request)
    {
        $newOrder = $request['order'];
        $reorderResult = true;
        for($i = 0; $i<count($newOrder); $i++)
        {
            $reorderResult = $reorderResult && CatagoryOrder::where('catagory_id', $newOrder[$i]['id'])
                         ->update(['catagory_order' => $i]);
        }

        if($reorderResult)
        {
            return redirect('listmanager');
        }
        else
        {
            return redirect('listmanager');
        }
        //dd($reorderResult);
        //return response($request);
    }

}
