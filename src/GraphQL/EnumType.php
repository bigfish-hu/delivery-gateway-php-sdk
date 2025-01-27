<?php

namespace BigFish\DeliveryGateway\GraphQL;

use ReflectionClass;

class EnumType extends Type
{
    public function __call(string $name, array $arguments)
    {
        return $this->getValue() === strtoupper(substr(preg_replace('/(?<!^)[A-Z]/', '_$0', $name), 3));
    }

    public static function __callStatic($name, $arguments)
    {
        return static::make($name);
    }

    public static function values(): array
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

        return $values[static::class];
    }
}
