<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Talgatfox\IinValidator\IinValidator;

class IinValidatorTest extends TestCase
{
    public function testValidate(): void
    {
        $iin = "950823300725";

        $validator = new IinValidator();
        $this->assertTrue($validator->validate($iin));

        $this->assertFalse($validator->validate("111222333444"));
        $this->assertFalse($validator->validate(""));
        $this->assertFalse($validator->validate("000"));
        $this->assertFalse($validator->validate("00000000000"));
    }
}
