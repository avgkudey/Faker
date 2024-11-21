<?php

namespace Faker\Provider\en_SL;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $mobileFormats = [
        '+94 (071) ###-####', '+94 (072) ###-####', '+94 (074) ###-####',
        '+94 (075) ###-####', '+94 (076) ###-####', '+94 (077) ###-####',
        '+94 (078) ###-####', '+94 (079) ###-####',

        '(071) ###-####', '(072) ###-####', '(074) ###-####',
        '(075) ###-####', '(076) ###-####', '(077) ###-####',
        '(078) ###-####', '(079) ###-####',
    ];

    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
