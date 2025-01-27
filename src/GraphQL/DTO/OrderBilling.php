<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $vatNumber
 * @property bool|null $isCompany
 * @property Address|null $address
 */
class OrderBilling extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "email" => "string",
        "phone" => "string",
        "vatNumber" => "string",
        "isCompany" => "bool",
        "address" => Address::class,
    ];

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
     * @return Address|null
     */
    public function getAddress(): ?Address
    {
        return $this->address;
    }
}
