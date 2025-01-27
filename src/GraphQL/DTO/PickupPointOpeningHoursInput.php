<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property TimezoneEnum|null $timezone
 * @property OpeningHourInput[]|null $openingHours
 */
class PickupPointOpeningHoursInput extends ObjectType
{
    protected $casts = [
        "timezone" => TimezoneEnum::class,
        "openingHours" => [OpeningHourInput::class],
    ];

    /**
     * @param TimezoneEnum $value
     *
     * @return self
     */
    public function setTimezone(TimezoneEnum $value): self
    {
        $this->timezone = $value;

        return $this;
    }

    /**
     * @param OpeningHourInput[] $value
     *
     * @return self
     */
    public function setOpeningHours(array $value): self
    {
        $this->openingHours = $value;

        return $this;
    }

    /**
     * @return TimezoneEnum|null
     */
    public function getTimezone(): ?TimezoneEnum
    {
        return $this->timezone;
    }

    /**
     * @return OpeningHourInput[]|null
     */
    public function getOpeningHours(): ?array
    {
        return $this->openingHours;
    }
}
