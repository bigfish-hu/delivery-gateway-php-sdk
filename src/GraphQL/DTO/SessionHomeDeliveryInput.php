<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property bool|null $enabled
 * @property CustomerRecipientInput|null $recipient
 * @property bool|null $location
 * @property ProviderEnum[]|null $providers
 * @property SessionPriceInput[]|null $price
 */
class SessionHomeDeliveryInput extends ObjectType
{
    protected $casts = [
        "enabled" => "bool",
        "recipient" => CustomerRecipientInput::class,
        "location" => "bool",
        "providers" => [ProviderEnum::class],
        "price" => [SessionPriceInput::class],
    ];

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setEnabled(bool $value): self
    {
        $this->enabled = $value;

        return $this;
    }

    /**
     * @param CustomerRecipientInput|null $value
     *
     * @return self
     */
    public function setRecipient(?CustomerRecipientInput $value): self
    {
        $this->recipient = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setLocation(?bool $value): self
    {
        $this->location = $value;

        return $this;
    }

    /**
     * @param ProviderEnum[]|null $value
     *
     * @return self
     */
    public function setProviders(?array $value): self
    {
        $this->providers = $value;

        return $this;
    }

    /**
     * @param SessionPriceInput[]|null $value
     *
     * @return self
     */
    public function setPrice(?array $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * @return CustomerRecipientInput|null
     */
    public function getRecipient(): ?CustomerRecipientInput
    {
        return $this->recipient;
    }

    /**
     * @return bool|null
     */
    public function getLocation(): ?bool
    {
        return $this->location;
    }

    /**
     * @return ProviderEnum[]|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }

    /**
     * @return SessionPriceInput[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }
}
