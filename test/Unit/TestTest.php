<?php declare(strict_types=1);

namespace CodeCollabTest\Unit;

use CodeCollab\Test\Test;

class TestTest extends \PHPUnit_Framework_TestCase
{
    public function xtestBare()
    {
        (new Test())->bare();
    }

    public function testWithCookieParams()
    {
        (new Test())->withCookieParams();
    }
}
