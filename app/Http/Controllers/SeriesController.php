<?php

namespace App\Http\Controllers;

use App\Series;
use App\Sermon;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function __construct()
    {

        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seriess=Series::all();

        return view('controlPanel.series.create')->with('seriess',$seriess);
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
            'name'=>'required|max:100'
        ]);
        $series=new Series();
        $series->name=$request->name;

        $series->save();

        \Storage::makeDirectory('sermons/'.$request->name);

        $request->session()->flash('success','Series created Succesfully');

        return redirect()->route('series.create');
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
        $series=Series::find($id);

        return view('controlPanel.series.edit')->with('series',$series);
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
            'name'=>'required|max:100'
        ]);
        $series=Series::find($id);
        $oldSeriesName=$series->name;
        $series->name=$request->name;

        $series->save();
        $oldpath=storage_path('app/sermons/'.$oldSeriesName);
        $newpath=storage_path('app/sermons/'.$request->name);
        rename($oldpath,$newpath);

        $request->session()->flash('success','Series created Succesfully');

        return redirect()->route('series.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        $series=Series::find($id);
        if($series->id == 4) {
            $request->session()->flash('failure',$series->name.' Series Can\'t be  deleted');
            return redirect()->route('series.create');
        }
        foreach ($series->sermons as $sermon) {
            $sermon = Sermon::find($sermon->id);
            $sermon->series_id = 4;
            $sermon->save();
        }
        $series->delete();
        $request->session()->flash('success',$series->name.' Series Deleted SuccessFully');
        return redirect()->route('series.create');
    }
    public function getDelete($id){
        $series=Series::find($id);

        return view('controlPanel.series.delete')->with('series',$series);
    }
}
