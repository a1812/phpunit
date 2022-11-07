<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Event\TestData;

/**
 * @psalm-immutable
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DataFromTestDependency extends TestData
{
    public static function from(SerializedValueCollection $serializedValues, string $stringRepresentation): self
    {
        return new self($serializedValues, $stringRepresentation);
    }

    /**
     * @psalm-assert-if-true DataFromTestDependency $this
     */
    public function isFromTestDependency(): bool
    {
        return true;
    }
}
