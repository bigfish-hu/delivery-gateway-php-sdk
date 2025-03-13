<?php

namespace BigFish\DeliveryGateway\Webhook;

class DTO
{
    protected $data = [];

    public function __construct(array $data = [])
    {
        $this->data = $data;
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

    public function toArray()
    {
        return $this->data;
    }
}
