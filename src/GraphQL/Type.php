<?php

namespace BigFish\DeliveryGateway\GraphQL;

class Type
{
    protected $value;

    public function __construct(string $value)
    {
        $this->setValue($value);
    }

    public static function make(string $value): mixed
    {
        return new static($value);
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    public function __toString()
    {
        return $this->getValue();
    }
}
