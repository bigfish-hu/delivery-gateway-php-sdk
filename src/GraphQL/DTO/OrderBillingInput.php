<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $vatNumber
 * @property bool|null $isCompany
 * @property AddressInput|null $address
 */
class OrderBillingInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "email" => "string",
        "phone" => "string",
        "vatNumber" => "string",
        "isCompany" => "bool",
        "address" => AddressInput::class,
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setName(?string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setEmail(?string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setPhone(?string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setVatNumber(?string $value): self
    {
        $this->vatNumber = $value;

        return $this;
    }

    /**
     * @param bool|null $value
     *
     * @return self
     */
    public function setCompany(?bool $value): self
    {
        $this->isCompany = $value;

        return $this;
    }

    /**
     * @param AddressInput|null $value
     *
     * @return self
     */
    public function setAddress(?AddressInput $value): self
    {
        $this->address = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @return string|null
     */
    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    /**
     * @return bool|null
     */
    public function isCompany(): ?bool
    {
        return $this->isCompany;
    }

    /**
     * @return AddressInput|null
     */
    public function getAddress(): ?AddressInput
    {
        return $this->address;
    }
}
