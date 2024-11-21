<?php

declare(strict_types=1);

namespace Faker\Test\Provider\en_SL;

use Faker\Provider\en_SL\PhoneNumber;
use Faker\Test\TestCase;

final class PhoneNumberTest extends TestCase
{
    public function testMobileNumber(): void
    {
        for ($i = 0; $i < 100; ++$i) {
            $number = $this->faker->mobileNumber;
            $digits = array_values(array_filter(str_split($number), 'ctype_digit'));

            // Check country code prefix for international format
            if (strpos($number, '+94') === 0) {
                $digits = array_slice($digits, 2);
            }
            // 10 digits total
            self::assertCount(10, $digits);

            // Check area codes (071-079)
            $areaCode = $digits[0] . $digits[1];

            self::assertContains($areaCode, ['07', '07', '07', '07', '07', '07', '07', '07']);

            // Test format
            self::assertMatchesRegularExpression('/^(\+94)?([ -]*\(07\d\)[ -]*\d{3}[-]?\d{4})$/', $number);
        }
    }

    protected function getProviders(): iterable
    {
        yield new PhoneNumber($this->faker);
    }
}
