<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone;

use Laminas\ModuleManager\Feature\ConfigProviderInterface;
use Laminas\ModuleManager\Feature\BootstrapListenerInterface;
use Laminas\EventManager\EventInterface;

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
        /** @var \Laminas\Mvc\MvcEvent $e */
        $sm = $e->getApplication()->getServiceManager();
        $sm->get('Bupy7\Zf\TimeZone\Bootstrap')->__invoke();
    }
}
