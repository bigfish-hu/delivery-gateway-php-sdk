<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create;

use BigFish\DeliveryGateway\DTO\DTO;

/**
 * @property string|null $referenceId
 * @property Address[]|null $addresses
 */
class Customer extends DTO
{
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    public function setReferenceId(?string $referenceId): self
    {
        $this->referenceId = $referenceId;

        return $this;
    }

    public function getAddresses(): ?array
    {
        return $this->addresses;
    }

    public function setAddresses(?array $addresses): self
    {
        $this->addresses = $addresses;

        return $this;
    }
}
