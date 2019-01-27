<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone;

use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\ModuleManager\Feature\BootstrapListenerInterface;
use Zend\EventManager\EventInterface;

class Module implements ConfigProviderInterface, BootstrapListenerInterface
{
    public function getConfig(): array
    {
        $configProvider = new ConfigProvider();
        return [
            'service_manager' => $configProvider->getDependencies(),
            'time_zone' => $configProvider->getTimeZone(),
        ];
    }

    public function onBootstrap(EventInterface $e): void
    {
        /** @var \Zend\Mvc\MvcEvent $e */
        $sm = $e->getApplication()->getServiceManager();
        $sm->get('Bupy7\Zf\TimeZone\Bootstrap')->run();
    }
}
