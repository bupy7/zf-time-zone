<?php

namespace TimeZone\Service;

use DateTimeZone;

class TimeZoneService
{
    /**
     * @var DateTimeZone
     */
    protected $timeZone;

    public function __construct(string $timeZone)
    {
        $this->setTimeZone($timeZone);
    }

    /**
     * @param string|DateTimeZone $timeZone
     * @return TimeZoneService
     */
    public function setTimeZone($timeZone): TimeZoneService
    {
        if (!$timeZone instanceof DateTimeZone) {
            $timeZone = new DateTimeZone($timeZone);
        }
        $this->timeZone = $timeZone;
        return $this;
    }

    public function getTimeZone(): DateTimeZone
    {
        return $this->timeZone;
    }

    public function apply(): TimeZoneService
    {
        date_default_timezone_set($this->timeZone->getName());
        return $this;
    }
}
