<?php

namespace BigFish\DeliveryGateway\Enums;

use BigFish\DeliveryGateway\Exception\EnumException;
use ReflectionClass;

class Enum
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
        if (!$this->isValid($value)) {
            throw new EnumException(sprintf("Value '%s' is not valid for enumeration %s", $value, static::class));
        }

        $this->value = $value;
    }

    protected function isValid(string $value): bool
    {
        static $values = [];

        if (!array_key_exists(static::class, $values)) {
            $reflection = new ReflectionClass(static::class);

            $matches = [];

            preg_match_all(
                '/\*\s+@method\s+static\s+(self|static)\s+([a-zA-Z0-9_]+)\s*\(\)/',
                $reflection->getDocComment(),
                $matches
            );

            $values[static::class] = $matches[2];
        }

        return in_array($value, $values[static::class], true);
    }

    public static function __callStatic($name, $arguments)
    {
        return new static($name);
    }

    public function __toString()
    {
        return $this->value;
    }
}
