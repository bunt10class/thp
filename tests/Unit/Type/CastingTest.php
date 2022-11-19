<?php

declare(strict_types=1);

namespace Tests\Unit\Type;

use PHPUnit\Framework\TestCase;
use THP\Type\Casting;

class CastingTest extends TestCase
{
    /**
     * @dataProvider provideToBool
     */
    public function testToBool(mixed $value, bool $expect): void
    {
        $sut = new Casting();

        $result = $sut->toBool($value);

        $this->assertEquals($expect, $result);
    }

    public function provideToBool(): array
    {
        return $this->provideData([
            false,
            false, true,
            false, true, true, true, true,
            true, true, true, true,
            false, true,
            false, true, true,
            true, true,
            true, true,
        ]);
    }

    /**
     * @dataProvider provideBoolToBoolString
     */
    public function testBoolToBoolString(bool $value, string $expect): void
    {
        $sut = new Casting();

        $result = $sut->boolToBoolString($value);

        $this->assertEquals($expect, $result);
    }

    public function provideBoolToBoolString(): array
    {
        return [
            [true, 'true'],
            [false, 'false'],
        ];
    }

    /**
     * @dataProvider provideBoolStringToBool
     */
    public function testBoolStringToBool(string $value, ?bool $expect): void
    {
        $sut = new Casting();

        $result = $sut->boolStringToBool($value);

        $this->assertEquals($expect, $result);
    }

    public function provideBoolStringToBool(): array
    {
        return [
            ['true', true],
            ['false', false],
            ['', null],
            ['qwe', null],
        ];
    }

    /**
     * @dataProvider provideToInt
     */
    public function testToInt(mixed $value, int $expect): void
    {
        $sut = new Casting();

        $result = $sut->toInt($value);

        $this->assertEquals($expect, $result);
    }

    public function provideToInt(): array
    {
        return $this->provideData([
            0,
            0, 1,
            0, 1, 2147483647, -1, -2147483648,
            0, 999999, 0, -999999,
            0, 0,
            0, 0, 0,
            0, 0,
            0, 0,
        ]);
    }

    /**
     * @dataProvider provideToFloat
     */
    public function testToFloat(mixed $value, float $expect): void
    {
        $sut = new Casting();

        $result = $sut->toFloat($value);

        $this->assertEquals($expect, $result);
    }

    public function provideToFloat(): array
    {
        return $this->provideData([
            0,
            0, 1,
            0, 1, 2147483647, -1, -2147483648,
            0.000001, 999999.999999, -0.000001, -999999.999999,
            0, 0,
            0, 0, 0,
            0, 0,
            0, 0,
        ]);
    }

    /**
     * @dataProvider provideToString
     */
    public function testToString(mixed $value, string $expect): void
    {
        $sut = new Casting();

        $result = $sut->toString($value);

        $this->assertEquals($expect, $result);
    }

    public function provideToString(): array
    {
        return $this->provideData([
            '',
            '', '',
            '0', '1', '2147483647', '-1', '-2147483648',
            '', '', '', '',
            '', 'qwe',
            '', '', '',
            '', '',
            '', '',
        ]);
    }

    /**
     * @dataProvider provideToArray
     */
    public function testToArray(mixed $value, array $expect): void
    {
        $sut = new Casting();

        $result = $sut->toArray($value);

        $this->assertEquals($expect, $result);
    }

    public function provideToArray(): array
    {
        return $this->provideData([
            [],
            [], [],
            [], [], [], [], [],
            [], [], [], [],
            [], [],
            [], ['qwe'], ['qwe' => 'qwe'],
            [], [],
            [], [],
        ]);
    }

    private function provideData(array $expects): array
    {
        $actual = [
            null,
            false, true,
            0, 1, 2147483647, -1, -2147483648,
            0.000001, 999999.999999, -0.000001, -999999.999999,
            '', 'qwe',
            [], ['qwe'], ['qwe' => 'qwe'],
            new class() {}, new class() {function qwe(): string {return 'qwe';}},
            tmpfile(), fopen('php://stdout', 'w'),
        ];

        $data = [];
        foreach ($actual as $key => $value) {
            $data[] = [$value, $expects[$key]];
        }

        return $data;
    }
}