<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class PagesController extends Controller
{
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
        return view('sermons.atLittleFlock');
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
        return view('blog.blog');
    }

    public function getSingleEvent($event){

        return view('events.singleEvent');
    }
}
