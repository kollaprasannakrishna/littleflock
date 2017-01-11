<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DatePeriod;
use DateTime;
use DateInterval;

class Event extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
   public function getWednesdays($y, $m)
    {
        return new DatePeriod(
            new DateTime("first wednesday of $y-$m"),
            DateInterval::createFromDateString('next wednesday'),
            new DateTime("last day of $y-$m")
        );
    }
    public function getNextSunday(){
        $sampleDate='Tuesday, November 1,2016';
        $time=strtotime($sampleDate);
        $end=strtotime('fifth Sunday',$time);
        $format = 'l, F j, Y';
        $end_day=date($format,$end);

        return $end_day;
    }
    public function getNextDay($day,$oldDate){
        $time=strtotime($oldDate);
        $end=strtotime("next $day",$time);
        $format = 'Y-m-d H:i:s';
        $end_day=date($format,$end);

        return $end_day;
    }
    public function getMonthlyDays($y, $m,$day)
    {
        return new DatePeriod(
            new DateTime("first $day of $y-$m"),
            DateInterval::createFromDateString("next $day"),
            new DateTime("last day of $y-$m")
        );
    }
}
