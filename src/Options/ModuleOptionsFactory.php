<?php

namespace Bupy7\Zf\TimeZone\Options;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

class ModuleOptionsFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): ModuleOptions
    {
        return new ModuleOptions($container->get('config')['time_zone']);
    }
}
