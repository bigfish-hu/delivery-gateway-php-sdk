<?php

namespace BigFish\DeliveryGateway\DTO\Webhook;

/**
 * @property string $key
 * @property string|null $new_value
 * @property string|null $old_value
 */
class ConfigurationUpdated extends Event
{
    public function getKey(): string
    {
        return $this->key;
    }

    public function getNewValue(): ?string
    {
        return $this->new_value;
    }

    public function getOldValue(): ?string
    {
        return $this->old_value;
    }
}
