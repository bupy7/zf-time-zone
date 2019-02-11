<?php declare(strict_types=1);

namespace Bupy7\Zf\TimeZone;

/**
 * @author Belosloodcev Vasily <https://github.com/bupy7>
 * @since 1.0.1
 */
interface BootstrapInterface
{
    /**
     * @since 1.1.0
     */
    public function __invoke(): void;
}
