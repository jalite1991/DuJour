<?php

namespace DuJour;

use DateTime as LegacyDateTime;
use DateTimeZone;

class DateTime extends LegacyDateTime
{
    /**
     * An array of possible date parts.
     */
    protected static $dateParts = [
      'year' => ['L', 'o', 'Y', 'y'],
      'month' => ['F', 'm', 'M', 'n', 't'],
      'week' => ['w'],
      'day' => ['D', 'd', 'j', 'l', 'N', 'S', 'w', 'z'],
      'hour'=> ['g', 'G', 'h', 'H'],
      'minute' => ['i'],
      'second' => ['s'],
      'micro' => ['u'],
      'mili' => ['v'],
      'timezone' => ['e','O','P','p','Z'],
      'savings' => ['I']
    ];

    /**
     * Array of datevalues
     *
     * @var array
     */
    public $dateValues = [];


    public function __construct(string $dateTime = "now", DateTimeZone $timezone = null, $formatOverrides = null )
    {
        parent::__construct($dateTime, $timezone);


    }

    /**
     * Inher
     */
    public function format($string) : string {

        return parent::format($string);
    }


    public function rebuildDateValue()
    {
        $dateValues = [parent::format('y')];
    }
}
