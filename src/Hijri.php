<?php

namespace Lina\HijriDate;

use Illuminate\Support\Carbon;

class Hijri
{
    public function convertToHijri($date = null, int $adjustment = 0): string
    {
        // Parse the date and apply the adjustment in days before conversion
        $carbonDate = $date ? Carbon::parse($date) : Carbon::now();
        
        if ($adjustment !== 0) {
            $carbonDate->addDays($adjustment);
        }

        $y = $carbonDate->year;
        $m = $carbonDate->month;
        $d = $carbonDate->day;

        // Convert Gregorian to Julian Day
        if (($y > 1582) || (($y == 1582) && ($m > 10)) || (($y == 1582) && ($m == 10) && ($d > 14))) {
            $jd = (int)((1461 * ($y + 4800 + (int)(($m - 14) / 12))) / 4) + (int)((367 * ($m - 2 - 12 * ((int)(($m - 14) / 12)))) / 12) - (int)((3 * ((int)(($y + 4900 + (int)(($m - 14) / 12)) / 100))) / 4) + $d - 32075;
        } else {
            $jd = 367 * $y - (int)((7 * ($y + 5001 + (int)(($m - 9) / 7))) / 4) + (int)((275 * $m) / 9) + $d + 1729777;
        }

        // Convert Julian Day to Hijri
        $l = $jd - 1948440 + 10632;
        $n = (int)(($l - 1) / 10631);
        $l = $l - 10631 * $n + 354;
        $j = ((int)((10985 - $l) / 5316)) * ((int)((50 * $l) / 17719)) + ((int)($l / 5670)) * ((int)((43 * $l) / 15238));
        $l = $l - ((int)((30 - $j) / 15)) * ((int)((17719 * $j) / 50)) - ((int)($j / 16)) * ((int)((15238 * $j) / 43)) + 29;
        
        $month = (int)((24 * $l) / 709);
        $day = $l - (int)((709 * $month) / 24);
        $year = 30 * $n + $j - 30;
        
        return sprintf('%04d-%02d-%02d', $year, $month, $day);
    }
}