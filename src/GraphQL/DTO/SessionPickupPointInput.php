<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property bool|null $enabled
 * @property CustomerRecipientInput|null $recipient
 * @property SessionPickupPointProviderInput[]|null $providers
 * @property SessionPickupPointPriceInput[]|null $price
 * @property SessionPickupPointDisallowInput[]|null $disallow
 */
class SessionPickupPointInput extends ObjectType
{
    protected $casts = [
        "enabled" => "bool",
        "recipient" => CustomerRecipientInput::class,
        "providers" => [SessionPickupPointProviderInput::class],
        "price" => [SessionPickupPointPriceInput::class],
        "disallow" => [SessionPickupPointDisallowInput::class],
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
     * @param SessionPickupPointProviderInput[]|null $value
     *
     * @return self
     */
    public function setProviders(?array $value): self
    {
        $this->providers = $value;

        return $this;
    }

    /**
     * @param SessionPickupPointPriceInput[]|null $value
     *
     * @return self
     */
    public function setPrice(?array $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * @param SessionPickupPointDisallowInput[]|null $value
     *
     * @return self
     */
    public function setDisallow(?array $value): self
    {
        $this->disallow = $value;

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
     * @return SessionPickupPointProviderInput[]|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }

    /**
     * @return SessionPickupPointPriceInput[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * @return SessionPickupPointDisallowInput[]|null
     */
    public function getDisallow(): ?array
    {
        return $this->disallow;
    }
}
