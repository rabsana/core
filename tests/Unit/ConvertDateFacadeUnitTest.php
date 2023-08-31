<?php

namespace Rabsana\Core\Tests\Unit;

use Rabsana\Core\Support\Facades\ConvertDate;
use Rabsana\Core\Tests\TestCase;

class ConvertDateFacadeUnitTest extends TestCase
{
    public function test_gtoj_method()
    {
        $this->assertEquals(ConvertDate::gtoj('2021-11-17 10:00:10', 'Y/m/d H:i:s'), '1400/08/26 13:30:10');
        $this->assertEquals(ConvertDate::gtoj('', ''), '');
        $this->assertEquals(ConvertDate::gtoj(null, ''), '');
        $this->assertEquals(ConvertDate::gtoj('invalid-date-format', ''), '');
    }

    public function test_jtog_method()
    {
        $this->assertEquals(ConvertDate::jtog('1400/08/26', 'Y/m/d'), '2021/11/17');
        $this->assertEquals(ConvertDate::jtog('', ''), '');
        $this->assertEquals(ConvertDate::jtog(null, ''), '');
        $this->assertEquals(ConvertDate::jtog('invalid-date-format', ''), '');
    }
}
