<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property WebhookEnum|null $webhook
 * @property TransportEnum|null $transport
 * @property string|null $url
 */
class Webhook extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "webhook" => WebhookEnum::class,
        "transport" => TransportEnum::class,
        "url" => "string",
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return WebhookEnum|null
     */
    public function getWebhook(): ?WebhookEnum
    {
        return $this->webhook;
    }

    /**
     * @return TransportEnum|null
     */
    public function getTransport(): ?TransportEnum
    {
        return $this->transport;
    }

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }
}
