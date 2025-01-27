<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $referenceId
 * @property string|null $label
 * @property CustomerRecipientInput|null $recipient
 * @property AddressInput|null $address
 * @property LocationInput|null $location
 */
class CustomerAddressInput extends ObjectType
{
    protected $casts = [
        "referenceId" => "string",
        "label" => "string",
        "recipient" => CustomerRecipientInput::class,
        "address" => AddressInput::class,
        "location" => LocationInput::class,
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setReferenceId(?string $value): self
    {
        $this->referenceId = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setLabel(?string $value): self
    {
        $this->label = $value;

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
     * @param AddressInput $value
     *
     * @return self
     */
    public function setAddress(AddressInput $value): self
    {
        $this->address = $value;

        return $this;
    }

    /**
     * @param LocationInput|null $value
     *
     * @return self
     */
    public function setLocation(?LocationInput $value): self
    {
        $this->location = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferenceId(): ?string
    {
        return $this->referenceId;
    }

    /**
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * @return CustomerRecipientInput|null
     */
    public function getRecipient(): ?CustomerRecipientInput
    {
        return $this->recipient;
    }

    /**
     * @return AddressInput|null
     */
    public function getAddress(): ?AddressInput
    {
        return $this->address;
    }

    /**
     * @return LocationInput|null
     */
    public function getLocation(): ?LocationInput
    {
        return $this->location;
    }
}
