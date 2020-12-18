<?php

declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\Telemetric;

use PHPUnit\Event\Exception;

final class MemoryUsage
{
    private int $bytes;

    /**
     * @throws Exception\InvalidMemoryUsage
     */
    public static function fromBytes(int $bytes): self
    {
        if ($bytes < 0) {
            throw Exception\InvalidMemoryUsage::bytes($bytes);
        }

        return new self($bytes);
    }

    private function __construct(int $bytes)
    {
        $this->bytes = $bytes;
    }

    public function bytes(): int
    {
        return $this->bytes;
    }
}