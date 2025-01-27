<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property CountryEnum[]|null $countries
 */
class UpdateZoneInput extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "countries" => [CountryEnum::class],
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setId(string $value): self
    {
        $this->id = $value;

        return $this;
    }

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
