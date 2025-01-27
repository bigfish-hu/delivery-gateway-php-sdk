<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property CountryEnum|null $country
 * @property string|null $state
 * @property string|null $city
 * @property string|null $postalCode
 * @property string|null $addressLine1
 * @property string|null $addressLine2
 * @property string|null $note
 */
class Address extends ObjectType
{
    protected $casts = [
        "country" => CountryEnum::class,
        "state" => "string",
        "city" => "string",
        "postalCode" => "string",
        "addressLine1" => "string",
        "addressLine2" => "string",
        "note" => "string",
    ];

    /**
     * @return CountryEnum|null
     */
    public function getCountry(): ?CountryEnum
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @return string|null
     */
    public function getNote(): ?string
    {
        return $this->note;
    }
}
