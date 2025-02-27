<?php

namespace App\Tests\Functional\Operations;

use App\ExtendedDateTimeImmutable;
use App\Operations\Enum\RangeStepEnum;
use PHPUnit\Framework\TestCase;

class DateRangeHelperTest extends TestCase
{
    public function testGetRangeArraySuccess(): void
    {
        $initialDateTime = ExtendedDateTimeImmutable::create("2025-01-01");
        $endDateTime = ExtendedDateTimeImmutable::create("2025-01-05");
        $step = RangeStepEnum::DAY;

        /** @psalm-var array<int,ExtendedDateTimeImmutable> $rangeArray */
        $rangeArray = $initialDateTime->getRangeArray(
            endDateTime: $endDateTime,
            step: $step
        );

        $this->assertCount(5, $rangeArray);

        foreach ($rangeArray as $key => $date) {
            $this->assertTrue($date instanceof ExtendedDateTimeImmutable);

            if (0 !== $key) {
                $this->assertTrue(
                    $date->dateTime > $rangeArray[$key - 1]->dateTime
                );
            }
        }
    }

    public function testGetRangeArrayOfStringsSuccess(): void
    {
        $initialDateTime = ExtendedDateTimeImmutable::create("2025-01-01");
        $endDateTime = ExtendedDateTimeImmutable::create("2025-01-05");
        $step = RangeStepEnum::DAY;

        $actualRangeArray = [
            0 => "2025-01-01",
            1 => "2025-01-02",
            2 => "2025-01-03",
            3 => "2025-01-04",
            4 => "2025-01-05",
        ];

        $rangeArray = $initialDateTime->getRangeArrayOfStrings(
            endDateTime: $endDateTime,
            step: $step
        );

        $this->assertCount(5, $rangeArray);
        $this->assertCount(0, array_diff($rangeArray, $actualRangeArray));
    }
}
