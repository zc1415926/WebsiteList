<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use Auth;
use DB;
use Laracasts\Flash\Flash;

class ListManagerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $user_id = Auth::user()->id;

        $catagories = DB::select(
            "SELECT
                catagories.catagory_name,
                catagory_order.catagory_order,
                catagories.id
            FROM
                catagories ,
                catagory_order
            WHERE
                catagories.id = catagory_order.catagory_id AND
                catagories.user_id = ?
            ORDER BY
                catagory_order.catagory_order ASC", [$user_id]
        );



        return view('manager.index', compact('catagories'));
    }
}
