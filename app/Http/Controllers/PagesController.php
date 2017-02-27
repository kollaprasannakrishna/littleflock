<?php

namespace App\Http\Controllers;

use App\Event;
use App\Post;
use App\Sermon;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome(){
        date_default_timezone_set("America/New_York");
        $y=date('Y');
        $m=date('m');
        $eventModel=new \App\Event();
        $events=\App\Event::all();
        foreach ($events as $event){
            if($event->type == 'weekly') {
                if ($event->date < date("Y-m-d H:i:s")) {
                    $getNextDate = $eventModel->getNextDay($event->day, $event->date);

                    $event->date = $getNextDate;

                    $event->save();
                }
            }elseif ($event->type == 'monthly'){

                $result_dates=array();
                $result_dates=$eventModel->getMonthly($y,$m,$event->day,$event);

                // dd($result_dates);
                if(empty($result_dates)){
                    $monthInc=$m+1;
                    $result_dates=$eventModel->getMonthly($y,$monthInc,$event->day,$event);

                    $event->date=$result_dates[0];
                    $event->save();
                }else{
                    $event->date=$result_dates[0];
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
        $latesEvent=\App\Event::take(1)->where('active','YES')->orderBy('date','asc')->get();
        $events_home=\App\Event::take(3)->where('active','YES')->orderBy('date','asc')->get();
        return view('landing.index')->with('events',$events_home)->with('latestEvent',$latesEvent);
    }
    public function getGreetings(){
        return view('aboutus.greetings');
    }
    public function getWhoWeAre(){
        return view('aboutus.whoWeAre');
    }
    public function getWhatWeBelieve(){
        return view('aboutus.whatWeBelieve');
    }
    public function getCalendar(){
        $events=Event::all();
        return view('aboutus.calendar')->with('events',$events);
    }
    public function getSundayMinistry(){
        return view('ministry.sundayMinistry');
    }
    public function getPrayerMeetings(){
        return view('ministry.prayerMeetings');
    }
    public function getBibleStudies(){
        return view('ministry.bibleStudies');
    }
    public function getChildernsMinistry(){
        return view('ministry.childernMinistry');
    }
    public function getGospelMinistry(){
        return view('ministry.gospelMinistry');
    }
    public function getOtherMinistry(){
        return view('ministry.otherMeetings');
    }

    public function getSermonAtLittleFlock(){
        $sermons=Sermon::orderBy('id','desc')->paginate(3);
        return view('sermons.atLittleFlock')->with('sermons',$sermons);
    }
    public function getSermonAtOthers(){
        return view('sermons.atOthers');
    }
    public function getGallery(){
        return view('pages.gallery');
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function getBlog(){
        $posts=Post::orderBy('id','desc')->paginate(3);
        return view('blog.blog')->with('posts',$posts);
    }

    public function getSingleEvent($event){
        $event_name=Event::where('name','=',$event)->first();
        return view('events.singleEvent')->with('event',$event_name);
    }

    public function getSingleSermon($sermon){

        return view('sermons.single');
    }
}
