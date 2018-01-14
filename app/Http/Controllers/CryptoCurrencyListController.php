<?php

namespace App\Http\Controllers;

use \App\Api\AlphaVantage;
use Illuminate\Http\Request;
use \App\Cryptocurrency;


class CryptoCurrencyListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cc = new Cryptocurrency();
        $cc_list = $cc->getlist();

        return view('cryptocurrlist',compact(['cc_list']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $symbol = new Symbol();
//        $symbol->pullData($request->id);
//        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cc = new Cryptocurrency();
        $single_curr = $cc->getInfo($id);

        if(!$single_curr){
            dd('No Data found for '.$id);
        }

        return view('currency.singlecurrency',compact(['single_curr','id']));
    }


    public function getCurrentPrice($id)
    {
        $cc = new Cryptocurrency();
        $current_price = $cc->getCurrentPrice($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}