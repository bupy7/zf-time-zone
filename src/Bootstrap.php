<?php

namespace Bupy7\Zf\TimeZone;

use Bupy7\Zf\TimeZone\Service\TimeZoneService;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 * @since 1.0.1
 */
class Bootstrap implements BootstrapInterface
{
    /**
     * @var TimeZoneService
     */
    private $timeZoneService;

    public function __construct(TimeZoneService $timeZoneService)
    {
        $this->timeZoneService = $timeZoneService;
    }

    public function run(): void
    {
        $this->timeZoneService->apply();
    }
}
