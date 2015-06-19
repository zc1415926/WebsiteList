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



        //$user = Auth::user();
        //$catagories = Auth::user()->catatories()->orderBy(')->get();
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
            catagories.user_id = 2
            ORDER BY
            catagory_order.catagory_order ASC"
        );



        return view('manager.index', compact('catagories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
