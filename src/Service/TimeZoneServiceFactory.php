<?php

namespace TimeZone\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class TimeZoneServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): TimeZoneService
    {
        return new TimeZoneService($container->get('TimeZone\Options\ModuleOptions')->getTimeZone());
    }
}
