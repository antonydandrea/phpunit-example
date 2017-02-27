<?php
use PHPUnit\Framework\TestCase;
use SimpleCalc\SimpleCalc;

class SimpleCalcTest extends TestCase
{
    /** 
     * 
     * @return array
     */
    public function add10PercentProvider()
    {
        return [
            [
                100,
                110,
            ],
            [
                0,
                0,
            ],
            [
                1,
                1.1
            ],
            [
                1.1,
                1.21
            ],
            [
                -20,
                -18
            ]
        ];
    }
    
    /**
     * @param numeric $input
     * @param numeric $expected
     * 
     * @dataProvider add10PercentProvider
     */
    public function testAdd10Percent($input, $expected)
    {
        $calc = new SimpleCalc;
        $output = $calc->add10Percent($input);
        $this->assertSame($expected, $output);
    }
}
