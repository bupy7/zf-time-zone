<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone\Options;

use Laminas\Stdlib\AbstractOptions;

class ModuleOptions extends AbstractOptions
{
    /**
     * @var string
     */
    protected $timeZone = '';

    public function setTimeZone(string $timeZone): ModuleOptions
    {
        $this->timeZone = $timeZone;
        return $this;
    }

    public function getTimeZone(): string
    {
        return $this->timeZone;
    }
}
