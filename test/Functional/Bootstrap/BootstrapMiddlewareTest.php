<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone\Test\Functional\Bootstrap;

use PHPUnit\Framework\TestCase;;
use Zend\Test\Util\ModuleLoader;
use Bupy7\Zf\TimeZone\Module;
use Bupy7\Zf\TimeZone\Middleware\BootstrapMiddleware;
use Bupy7\Zf\TimeZone\Bootstrap;
use Bupy7\Zf\TimeZone\Service\TimeZoneService;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use function date_default_timezone_get;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 * @since 1.0.1
 */
class BootstrapMiddlewareTest extends TestCase
{
    public function testProcess(): void
    {
        $middleware = $this->createMiddleware();

        $this->assertNotEquals('Europe/London', date_default_timezone_get());
        $middleware->process(
            $this->getMockBuilder(ServerRequestInterface::class)->getMock(),
            $this->getMockBuilder(RequestHandlerInterface::class)->getMock()
        );
        $this->assertEquals('Europe/London', date_default_timezone_get());
    }

    private function createMiddleware(): BootstrapMiddleware
    {
        return new BootstrapMiddleware(new Bootstrap(
            new TimeZoneService('Europe/London')
        ));
    }
}
