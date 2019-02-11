<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Bupy7\Zf\TimeZone\Bootstrap;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 * @since 1.0.1
 */
class BootstrapMiddleware implements MiddlewareInterface
{
    /**
     * @var Bootstrap
     */
    private $bootstrap;

    public function __construct(Bootstrap $bootstrap)
    {
        $this->bootstrap = $bootstrap;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $this->bootstrap->__invoke();

        return $handler->handle($request);
    }
}
