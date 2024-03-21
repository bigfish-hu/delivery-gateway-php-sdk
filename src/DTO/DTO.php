<?php

namespace BigFish\DeliveryGateway\DTO;

use BigFish\DeliveryGateway\Exception\DeliveryGatewayException;
use Throwable;

/**
 * @method static static make(array $data = [])
 */
class DTO
{
    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public static function __callStatic($name, $arguments)
    {
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
        $this->data[$name] = $value;
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
}
