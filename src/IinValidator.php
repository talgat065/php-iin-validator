<?php

declare(strict_types=1);

namespace Talgatfox\IinValidator;

class IinValidator
{
    private const FIRST_SEQ = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
    private const SECOND_SEQ = [3, 4, 5, 6, 7, 8, 9, 10, 11, 1, 2];

    /**
     * Validate if passed IIN is valid by calculating check sum.
     * @param string $iin
     * @return bool
     */
    public function validate(string $iin): bool
    {
        $match = preg_match("/^[0-9]{12}$/", $iin);

        if (!$match) {
            return false;
        }

        $calculatedCheckSum = self::calculateCheckSum($iin);
        $realCheckSum = (int)substr($iin, -1);

        return $calculatedCheckSum === $realCheckSum;
    }

    /**
     * @param string $iin
     * @return int
     */
    private function calculateCheckSum(string $iin): int
    {
        $nums = str_split($iin);

        $sum = 0;
        foreach (self::FIRST_SEQ as $i => $j) {
            $sum += $nums[$i] * $j;
        }

        if ($sum % 11 === 10) {
            $sum = 0;

            foreach (self::SECOND_SEQ as $i => $j) {
                $sum += $nums[$i] * $j;
            }

        }

        return $sum % 11;
    }
}
