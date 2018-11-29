<?php

declare(strict_types=1);

namespace LaravelDay\Article\ValueObject;

use LaravelDay\Article\ValueObject\Exception\BodyTooShort;

final class Body
{
    /**
     * @var string
     */
    private $body;

    public function __construct(string $body)
    {
        if (\mb_strlen($body) < 10) {
            throw new BodyTooShort('Body too short');
        }
        $this->body = $body;
    }

    public function isEqual(self $body)
    {
        return (string) $body === $this->__toString();
    }

    public function __toString()
    {
        return $this->body;
    }

    private function __clone()
    {
    }
}
