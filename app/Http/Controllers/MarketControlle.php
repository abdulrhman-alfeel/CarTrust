<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Market;
class MarketControlle extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('market.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
///
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $market = new Market();
 
        $market->servicng = $request->input('servicng');
        $market->name= $request->input('firstName');
        $market->namberPhon= $request->input('namberPhon');
        $market->CountryName= $request->input('CountryName');
        $market->jopName= $request->input('jopName');
        $market->email= $request->input('email');
        $market->description= $request->input('description');
        
        $market->save();

        return redirect()->route('market.index')->with('message','تم ارسال استفسارك وسيتم الرد عليك باقرب وقت نشكرك على تواصلك معنا ');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
