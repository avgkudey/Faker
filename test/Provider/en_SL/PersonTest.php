<?php

declare(strict_types=1);

namespace Faker\Test\Provider\en_SL;

use Faker\Provider\en_SL\Person;
use Faker\Test\TestCase;

final class PersonTest extends TestCase
{
    public function testNicNumberOld(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $nic = $this->faker->nicNumberOld;

            self::assertSame(10, strlen($nic));
            self::assertMatchesRegularExpression('/^\d{9}[VX]$/', $nic);
        }
    }

    public function testNicNumber(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $nic = $this->faker->nicNumber;

            self::assertSame(12, strlen($nic), "NIC number should be 12 characters long: $nic");

            self::assertTrue(in_array($nic[0], ['9', '0'], true));

            $year = (int) substr($nic, 1, 4);
            self::assertGreaterThanOrEqual(1900, $year);
            self::assertLessThanOrEqual((int) date('Y'), $year);

            $midPart = substr($nic, 5, 5);
            self::assertMatchesRegularExpression('/^\d{5}$/', $midPart);

            $lastPart = substr($nic, 10, 1);
            self::assertMatchesRegularExpression('/^\d$/', $lastPart);
        }
    }

    protected function getProviders(): iterable
    {
        yield new Person($this->faker);
    }
}
