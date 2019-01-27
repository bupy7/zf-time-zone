<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone\Test\Functional;

use PHPUnit\Framework\TestCase;;
use Zend\Test\Util\ModuleLoader;
use Bupy7\Zf\TimeZone\Module;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 * @since 1.0.1
 */
class ModuleTest extends TestCase
{
    /**
     * A test of module loader.
     */
    public function testLoader(): void
    {
        $moduleLoader = new ModuleLoader([
            'modules' => [
                'Zend\Router',
                'Bupy7\Zf\TimeZone',
            ],
            'module_listener_options' => [
                'module_paths' => [
                    __DIR__ . '/../src'
                ],
                'config_cache_enabled' => false,
                'module_map_cache_enabled' => false,
                'check_dependencies' => true,
            ],
        ]);
        $this->assertInstanceOf(Module::class, $moduleLoader->getModule('Bupy7\Zf\TimeZone'));
    }
}
