<?php

namespace App\Http\Controllers;

use App\Series;
use App\Sermon;
use App\Venue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SermonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons=Sermon::all();
        return view('controlPanel.sermons.index')->with('sermons',$sermons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seriess=Series::all();
        $venues=Venue::all();
        return view('controlPanel.sermons.create')->with('seriess',$seriess)->with('venues',$venues);
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
            'title'=>'required',
            'speaker'=>'required',
            'venue_id'=>'required',
            'date'=>'required',
            'description'=>'required',
            'series_id'=>'required'
        ]);
        $sermon=new Sermon();
        $sermon->title=$request->title;
        $sermon->speaker=$request->speaker;
        $sermon->venue_id=$request->venue_id;
        $sermon->date=$request->date;
        $sermon->description=$request->description;
        if(hasValue($request->videolink)){
            $sermon->audiolink=$request->audiolink;
        }
        if(hasValue($request->videolink)){
            $sermon->videolink=$request->videolink;
        }
        if($request->hasFile('featured_image')){
            $file=$request->file('featured_image');
            $filename=time().".".$file->getClientOriginalExtension();
            $location=storage_path('app/images/sermons/'.$filename);
            Image::make($file)->resize(800,400)->save($location);

            $sermon->featured_image=$filename;
        }
        $sermon->series_id=$request->series_id;

        $sermon->save();

        $request->session()->flash('success','Sermon addes Success Fully');

        return redirect()->route('sermons.index');

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
        $sermon=Sermon::find($id);

        $seriess=Series::all();

        $venues=Venue::all();

        $ven=array();
        $ser=array();

        foreach ($seriess as $series){
            $ser[$series->id]=$series->name;
    }
    foreach ($venues as $venue){
        $ven[$venue->id]=$venue->name;
    }

        return view('controlPanel.sermons.edit')->with('venues',$ven)->with('seriess',$ser)->with('sermon',$sermon);
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
            'title'=>'required',
            'speaker'=>'required',
            'venue_id'=>'required',
            'date'=>'required',
            'description'=>'required',
            'series_id'=>'required'
        ]);
        $sermon=Sermon::find($id);
        $sermon->title=$request->title;
        $sermon->speaker=$request->speaker;
        $sermon->venue_id=$request->venue_id;
        $sermon->date=$request->date;
        $sermon->description=$request->description;
        if(hasValue($request->videolink)){
            $sermon->audiolink=$request->audiolink;
        }
        if(hasValue($request->videolink)){
            $sermon->videolink=$request->videolink;
        }
        if($request->hasFile('featured_image')){
            $file=$request->file('featured_image');
            $filename=time().".".$file->getClientOriginalExtension();
            $location=storage_path('app/images/sermons/'.$filename);
            Image::make($file)->resize(800,400)->save($location);
            $oldFileName=$sermon->featured_image;
           //dd($oldFileName);
            $sermon->featured_image=$filename;
            if($oldFileName != null) {
                Storage::delete('images/sermons/' . $oldFileName);
            }


        }
        $sermon->series_id=$request->series_id;

        $sermon->save();

        $request->session()->flash('success','Sermon addes Success Fully');

        return redirect()->route('sermons.index');
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
