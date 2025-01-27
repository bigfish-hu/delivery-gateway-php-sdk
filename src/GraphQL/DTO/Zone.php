<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property CountryEnum[]|null $countries
 */
class Zone extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "countries" => [CountryEnum::class],
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return CountryEnum[]|null
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }
}
