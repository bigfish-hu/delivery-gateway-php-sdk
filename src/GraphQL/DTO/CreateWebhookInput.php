<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property WebhookEnum|null $webhook
 * @property TransportEnum|null $transport
 * @property string|null $url
 */
class CreateWebhookInput extends ObjectType
{
    protected $casts = [
        "webhook" => WebhookEnum::class,
        "transport" => TransportEnum::class,
        "url" => "string",
    ];

    /**
     * @param WebhookEnum $value
     *
     * @return self
     */
    public function setWebhook(WebhookEnum $value): self
    {
        $this->webhook = $value;

        return $this;
    }

    /**
     * @param TransportEnum $value
     *
     * @return self
     */
    public function setTransport(TransportEnum $value): self
    {
        $this->transport = $value;

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
