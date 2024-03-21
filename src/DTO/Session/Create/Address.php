<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create;

use BigFish\DeliveryGateway\DTO\Address as BaseAddress;
use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\DTO\Location;
use BigFish\DeliveryGateway\DTO\Recipient;

/**
 * @property string|null $referenceId
 * @property string|null $label
 * @property Recipient $recipient
 * @property BaseAddress $address
 * @property Location|null $location
 */
class Address extends DTO
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

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getRecipient(): Recipient
    {
        return $this->recipient;
    }

    public function setRecipient(Recipient $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getAddress(): BaseAddress
    {
        return $this->address;
    }

    public function setAddress(BaseAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getLocation(): ?Location
    {
        return $this->location;
    }

    public function setLocation(?Location $location): self
    {
        $this->location = $location;

        return $this;
    }
}
