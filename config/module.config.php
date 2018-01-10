<?php

namespace TimeZone;

return [
    'time_zone' => [
        'time_zone' => 'Europe/London',
    ],
    'service_manager' => [
        'factories' => [
            Service\TimeZoneService::class => Service\TimeZoneServiceFactory::class,
            Options\ModuleOptions::class => Options\ModuleOptionsFactory::class,
        ],
    ],
];
