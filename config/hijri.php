<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Hijri Date Adjustment
    |--------------------------------------------------------------------------
    |
    | The Islamic calendar relies on physical moon sightings, which creates
    | regional variances compared to standard astronomical calculations.
    |
    | Set an integer value to shift the calculated date by adding or
    | subtracting days to align with your local calendar authority:
    |
    | Common Regional Offsets:
    |   +2 : Saudi Arabia (Umm al-Qura), UAE, Qatar, Kuwait, Bahrain
    |   +1 : Egypt, Jordan, Palestine, Turkey, Levant region
    |    0 : Standard Astronomical calculation / UTC baseline
    |   -1 : Morocco, UK, North America (regional sighting dependent)
    |   -2 : India, Pakistan, Bangladesh (South Asia sightings)
    |
    */

    'adjustment' => 2,

];