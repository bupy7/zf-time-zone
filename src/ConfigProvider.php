<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone;

use Zend\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 * @since 1.0.1
 */
class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'time_zone' => $this->getTimeZone(),
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            'factories' => [
                Service\TimeZoneService::class => Service\TimeZoneServiceFactory::class,
                Options\ModuleOptions::class => Options\ModuleOptionsFactory::class,
                Bootstrap::class => ReflectionBasedAbstractFactory::class,
                Middleware\BootstrapMiddleware::class => ReflectionBasedAbstractFactory::class,
            ],
        ];
    }

    public function getTimeZone(): array
    {
        return [
            'time_zone' => 'Europe/London',
        ];
    }
}
