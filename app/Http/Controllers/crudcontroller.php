<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\laravelcrudModel;

class crudcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('show');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function display()
    {
        $data = laravelcrudModel::orderBy('id','ASC')->get();
        return view('display',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'FIRSTNAME'=>'required',
            'LASTNAME'=>'required'
        ]);

        $data= new laravelcrudModel;
        $data->first_name=$request->FIRSTNAME;
        $data->last_name=$request->LASTNAME;
        $data->save();
        return redirect(asset('/display'))->with('msg','data inserted');

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
    public function edite($id)
    {
        $data = laravelcrudModel::find($id);
        return view('edite',compact('data'));
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
        $this->validate($request,[
            'FIRSTNAME'=>'required',
            'LASTNAME'=>'required'
        ]);

        $data = laravelcrudModel::find($id);
        $data->first_name=$request->FIRSTNAME;
        $data->last_name=$request->LASTNAME;
        $data->save();
        return redirect(asset('display'))->with('msg','data updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        laravelcrudModel::find($id)->delete();
        return redirect(asset('display'))->with('msg','data deleted');

    }
}
