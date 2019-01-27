<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone\Test\Functional\Service;

use DateTimeZone;
use PHPUnit\Framework\TestCase;
use Bupy7\Zf\TimeZone\Test\Functional\AppTrait;
use function date_default_timezone_get;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 */
class TimeZoneServiceTest extends TestCase
{
    use AppTrait;

    public function testApplyTimeZone1(): void
    {
        $sm = $this->getSm();

        /** @var \Bupy7\Zf\TimeZone\Service\TimeZoneService $timeZoneService */
        $timeZoneService = $sm->get('Bupy7\Zf\TimeZone\Service\TimeZoneService');

        $this->assertEquals(new DateTimeZone('Europe/London'), $timeZoneService->getTimeZone());
    }

    public function testApplyTimeZone2(): void
    {
        $sm = $this->getSm();

        /** @var \Bupy7\Zf\TimeZone\Service\TimeZoneService $timeZoneService */
        $timeZoneService = $sm->get('Bupy7\Zf\TimeZone\Service\TimeZoneService');

        $timeZoneService->setTimeZone('Europe/Moscow');
        $this->assertEquals(new DateTimeZone('Europe/Moscow'), $timeZoneService->getTimeZone());
        $timeZoneService->apply();
        $this->assertEquals('Europe/Moscow', date_default_timezone_get());

        $timeZoneService->setTimeZone(new DateTimeZone('UTC'));
        $this->assertEquals(new DateTimeZone('UTC'), $timeZoneService->getTimeZone());
        $timeZoneService->apply();
        $this->assertEquals('UTC', date_default_timezone_get());
    }

    public function testApplyTimeZone3(): void
    {
        $sm = $this->getSm();

        /** @var \Bupy7\Zf\TimeZone\Service\TimeZoneService $timeZoneService */
        $timeZoneService = $sm->get('Bupy7\Zf\TimeZone\Service\TimeZoneService');

        $timeZoneService->setTimeZone(new DateTimeZone('UTC'));
        $this->assertEquals(new DateTimeZone('UTC'), $timeZoneService->getTimeZone());
        $timeZoneService->apply();
        $this->assertEquals('UTC', date_default_timezone_get());
    }
}
