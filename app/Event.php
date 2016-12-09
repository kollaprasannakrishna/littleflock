<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DatePeriod;
use DateTime;
use DateInterval;

class Event extends Model
{
   public function getWednesdays($y, $m)
    {
        return new DatePeriod(
            new DateTime("first wednesday of $y-$m"),
            DateInterval::createFromDateString('next wednesday'),
            new DateTime("last day of $y-$m")
        );
    }
}
