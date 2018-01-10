<?php

namespace Bupy7\Zf\TimeZone\Test\Functional;

use Zend\ServiceManager\ServiceManager;
use Zend\Test\Util\ModuleLoader;

/**
 * @author Vasily Belosloodcev <https://github.com/bupy7>
 */
trait AppTrait
{
    private function getSm(array $config = []): ServiceManager
    {
        $moduleLoader = new ModuleLoader([
            'modules' => [
                'Zend\Router',
                'Bupy7\Zf\TimeZone',
            ],
            'module_listener_options' => [
                'config_glob_paths' => [],
                'extra_config' => $config,
                'module_paths' => [],
                'config_cache_enabled' => false,
                'module_map_cache_enabled' => false,
                'check_dependencies' => true,
            ],
        ]);

        return $moduleLoader->getServiceManager();
    }
}
