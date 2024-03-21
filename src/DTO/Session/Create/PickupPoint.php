<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\DTO\Recipient;

/**
 * @property bool $enabled
 * @property Recipient|null $recipient
 * @property PickupPoint\Provider[]|null $providers
 * @property PickupPoint\Price[]|null $price
 */
class PickupPoint extends DTO
{
    public function isEnabled(): bool
    {
        return $this->enabled;
    }

    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }

    public function getRecipient(): ?Recipient
    {
        return $this->recipient;
    }

    public function setRecipient(?Recipient $recipient): self
    {
        $this->recipient = $recipient;

        return $this;
    }

    public function getProviders(): ?array
    {
        return $this->providers;
    }

    public function setProviders(?array $providers): self
    {
        $this->providers = $providers;

        return $this;
    }

    public function getPrice(): ?array
    {
        return $this->price;
    }

    public function setPrice(?array $price): self
    {
        $this->price = $price;

        return $this;
    }
}
