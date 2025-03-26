<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $bankAccountNumber
 */
class ShipmentSenderInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "email" => "string",
        "phone" => "string",
        "bankAccountNumber" => "string",
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName(string $value): self
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
    public function setBankAccountNumber(?string $value): self
    {
        $this->bankAccountNumber = $value;

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
    public function getBankAccountNumber(): ?string
    {
        return $this->bankAccountNumber;
    }
}
