<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone\Service;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class TimeZoneServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): TimeZoneService
    {
        return new TimeZoneService($container->get('Bupy7\Zf\TimeZone\Options\ModuleOptions')->getTimeZone());
    }
}
