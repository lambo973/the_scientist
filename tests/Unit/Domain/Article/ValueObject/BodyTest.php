<?php

declare(strict_types=1);

namespace Tests\Unit\Domain\ValueObject;

use LaravelDay\Article\ValueObject\Body;
use LaravelDay\Article\ValueObject\Exception\BodyTooShort;
use Tests\TestCase;

class BodyTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @test
     */
    public function shouldCreateABody()
    {
        $expectedBody = 'This is valid body';
        $body = new Body($expectedBody);
        $this->assertEquals($expectedBody, (string) $body);
        $this->assertTrue($body->isEqual(new Body($expectedBody)));
    }

    /**
     * @test
     */
    public function shouldRaiseTitleTooShortException()
    {
        $this->expectException(BodyTooShort::class);
        $body = new Body('');
    }
}
