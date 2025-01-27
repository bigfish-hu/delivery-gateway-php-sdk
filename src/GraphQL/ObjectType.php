<?php

namespace BigFish\DeliveryGateway\GraphQL;

use BigFish\DeliveryGateway\Exception\DeliveryGatewayException;
use Throwable;

/**
 * @method static static make(array $data = [])
 * @method static static[] collect(array $data)
 */
class ObjectType
{
    protected $casts = [];

    protected $data = [];

    public function __construct(array $data = [])
    {
        foreach ($data as $key => $value) {
            $this->__set($key, $value);
        }
    }

    public static function __callStatic($name, $arguments)
    {
        if ($name === 'collect') {
            $data = [];

            foreach ($arguments[0] as $value) {
                $data[] = static::make($value);
            }

            return $data;
        }

        try {
            if ($name === 'make') {
                return new static(...$arguments);
            }
        } catch (Throwable $t) {
            // Nothing to do.
        }

        throw new DeliveryGatewayException('Data transfer object cannot be instantiated');
    }

    public function __get($name)
    {
        return $this->data[$name];
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $this->cast($name, $value);
    }

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }

    public function __unset($name)
    {
        unset($this->data[$name]);
    }

    public function toArray(): array
    {
        $toArray = static function ($value) use (&$toArray) {
            if (is_object($value)) {
                if (method_exists($value, 'toArray')) {
                    $value = $value->toArray();
                } elseif ($value instanceof DateTime) {
                    $value = $value->format('c');
                } elseif (method_exists($value, '__toString')) {
                    $value = $value->__toString();
                }
            }

            if (is_array($value)) {
                foreach ($value as $key => $nested) {
                    $value[$key] = $toArray($nested);
                }
            }

            return $value;
        };

        return $toArray($this->data);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }

    private function cast(string $name, mixed $value): mixed
    {
        if (is_null($value) || !array_key_exists($name, $this->casts)) {
            return $value;
        }

        $type = $this->casts[$name];
        $isArray = false;

        if (is_array($type)) {
            $type = $type[0];
            $isArray = true;
        }

        if (!$isArray) {
            $value = [$value];
        }

        foreach ($value as $key => $item) {
            if (is_a($type, self::class, true) || is_a($type, Type::class, true)) {
                $item = forward_static_call([$type, 'make'], $item);
            }

            switch ($type) {
                case DateTime::class:
                case 'date':
                case 'datetime':
                    $item = new DateTime($item);
                    break;
                case 'int':
                case 'integer':
                    $item = (int)$item;
                    break;
                case 'float':
                case 'double':
                    $item = (float)$item;
                    break;
                case 'bool':
                case 'boolean':
                    $item = (bool)$item;
                    break;
                case 'string':
                    $item = (string)$item;
                    break;
                case 'array':
                    $item = (array)$item;
                    break;
                case 'object':
                    $item = (object)$item;
                    break;
            }

            $value[$key] = $item;
        }

        if (!$isArray) {
            $value = $value[0];
        }

        return $value;
    }
}
