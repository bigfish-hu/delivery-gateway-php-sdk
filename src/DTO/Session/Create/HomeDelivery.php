<?php

namespace BigFish\DeliveryGateway\DTO\Session\Create;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\Enums\ProviderEnum;

/**
 * @property bool $enabled
 * @property bool|null $location
 * @property ProviderEnum[]|null $providers
 * @property Price[]|null $price
 */
class HomeDelivery extends DTO
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

    public function getLocation(): ?bool
    {
        return $this->location;
    }

    public function setLocation(?bool $location): self
    {
        $this->location = $location;

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
