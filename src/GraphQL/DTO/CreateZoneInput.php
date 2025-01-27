<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property CountryEnum[]|null $countries
 */
class CreateZoneInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "countries" => [CountryEnum::class],
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
     * @param CountryEnum[] $value
     *
     * @return self
     */
    public function setCountries(array $value): self
    {
        $this->countries = $value;

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
     * @return CountryEnum[]|null
     */
    public function getCountries(): ?array
    {
        return $this->countries;
    }
}
