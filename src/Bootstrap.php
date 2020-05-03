<?php declare(strict_types=1);

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

    /**
     * @since 1.1.0
     */
    public function __invoke(): void
    {
        $this->timeZoneService->apply();
    }
}
