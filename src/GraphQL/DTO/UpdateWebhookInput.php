<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $url
 */
class UpdateWebhookInput extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "url" => "string",
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
    public function setUrl(string $value): self
    {
        $this->url = $value;

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
    public function getUrl(): ?string
    {
        return $this->url;
    }
}
