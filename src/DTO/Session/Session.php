<?php

namespace BigFish\DeliveryGateway\DTO\Session;

use BigFish\DeliveryGateway\DTO\DTO;

/**
 * @property string $id
 */
class Session extends DTO
{
    public function getId(): string
    {
        return $this->id;
    }
}
