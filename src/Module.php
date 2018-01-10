<?php

namespace Bupy7\Zf\TimeZone;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\EventManager\EventInterface;

class Module implements ConfigProviderInterface, BootstrapListenerInterface
{
    public function getConfig(): array
    {
        return require __DIR__ . '/../config/module.config.php';
    }

    public function onBootstrap(EventInterface $e): void
    {
        /** @var \Zend\Mvc\MvcEvent $e */
        $sm = $e->getApplication()->getServiceManager();
        $sm->get('TimeZone\Service\TimeZoneService')->apply();
    }
}
