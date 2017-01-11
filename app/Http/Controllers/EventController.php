<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $event=new Event();

        $nextSun=$event->getNextSunday();

        $y=date('Y');
        $m=date('m');
        $arr=array();
        $i=0;
        foreach ($event->getWednesdays($y,$m) as $wednesday){
            $arr[$i]=$wednesday->format("Y-m-d\n");
            $i++;
        }
        return view('controlPanel.events.index')->with('arr',$arr)->with('nextSun',$nextSun);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $y=date('Y');
        $m=date('m');
        $eventModel=new Event();
        $events=Event::all();
        foreach ($events as $event){
            if($event->type == 'weekly') {
                if ($event->date < date("Y-m-d H:i:s")) {
                    $getNextDate = $eventModel->getNextDay($event->day, $event->date);

                    $event->date = $getNextDate;

                    $event->save();
                }
            }elseif ($event->type == 'monthly'){
                $breakMontlyArr=explode(',',$event->monthsDay);
                $x=0;
                $allMontlyDays=array();
                foreach ($eventModel->getMonthlyDays($y,$m,$event->day) as $daysInMonth){
                    $allMontlyDays[$x]=$daysInMonth->format("Y-m-d");
                    $x++;
                }
                $onlyDays=array();
                for($z=0;$z<count($breakMontlyArr);$z++) {
                    $onlyDays[$z] =$allMontlyDays[$breakMontlyArr[$z]-1] ;
                    }


                $copyArr=new \ArrayObject($onlyDays);

                for($c=0;$c<count($copyArr);$c++){
                    if($onlyDays[$c]< date("Y-m-d H:i:s")){
                        unset($onlyDays[$c]);
                    }
                }



                if($event->date == reset($onlyDays)){


                }else{
                    $event->date=reset($onlyDays);
                    $event->save();
                }

            }else if($event->type == 'special'){
                if($event->date < date("Y-m-d H:i:s")){
                 $event->active="NO";
                    $event->save();
                }else{
                    $event->active="YES";
                    $event->save();
                }
            }
        }
        return view('controlPanel.events.create')->with('events',$events);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->validate($request,array(
            'title'=>'required|max:255',
            'date'=>'required|date',
            'time'=>'Required',
            'venue'=>'Required',
            'type'=>'Required',
            'day'=>'required',
            'description'=>'Required'
        ));
        $DateconvertToPHP=str_replace('/','-',$request->date);

        $mysqlDate=date("Y-m-d H:i:s",strtotime($DateconvertToPHP));



        $timeToPhp=strtotime($request->time);
        $mysqlTime=date("H:i:s",$timeToPhp);
        $event=new Event();
        if($request->has('monthsDay')) {
            $str = implode(",", $request->monthsDay);
            $event->monthsDay=$str;
        }

        $event->active="YES";

        $event->name=$request->title;
        $event->date=$mysqlDate;
        $event->time=$mysqlTime;
        $event->venue=$request->venue;
        $event->type=$request->type;
        $event->day=$request->day;
        $event->description=$request->description;


        $request->user()->events()->save($event);

        $request->session()->flash('success','Event Created Successfully');

        return redirect()->route('events.show',$event->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event=Event::find($id);

        return view('controlPanel.events.show')->with('event',$event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event=Event::find($id);

        return view('controlPanel.events.edit')->with('event',$event);
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
        $this->validate($request,array(
            'title'=>'required|max:255',
            'date'=>'required|date',
            'time'=>'Required',
            'venue'=>'Required',
            'type'=>'Required',
            'day'=>'required',
            'description'=>'Required'
        ));
        $DateconvertToPHP=str_replace('/','-',$request->date);

        $mysqlDate=date("Y-m-d H:i:s",strtotime($DateconvertToPHP));



        $timeToPhp=strtotime($request->time);
        $mysqlTime=date("H:i:s",$timeToPhp);
        $event=Event::find($id);
        if($request->has('monthsDay')) {
            $str = implode(",", $request->monthsDay);
            $event->monthsDay=$str;
        }
        $event->active="YES";
        $event->name=$request->title;
        $event->date=$mysqlDate;
        $event->time=$mysqlTime;
        $event->venue=$request->venue;
        $event->type=$request->type;
        $event->day=$request->day;
        $event->description=$request->description;


        $request->user()->events()->save($event);

        $request->session()->flash('success','Event Created Successfully');

        return redirect()->route('events.show',$event->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $event=Event::find($id);
        $eventName=$event->name;
        $event->delete();

        $request->session()->flash('success',$eventName.' Event Deleted Successfully');

        return redirect()->route('events.create');

    }
    public function getDelete($id){
        $event=Event::find($id);

        return view('controlPanel.events.delete')->with('event',$event);
    }

}
