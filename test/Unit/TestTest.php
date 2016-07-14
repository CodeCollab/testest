<?php declare(strict_types=1);

namespace CodeCollabTest\Unit;

use CodeCollab\Test\Test;

class TestTest extends \PHPUnit_Framework_TestCase
{
    public function testBare()
    {
        (new Test())->bare();
    }

    public function testWithCookieParams()
    {
        (new Test())->withCookieParams();
    }
}
