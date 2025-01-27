<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property Provider[]|null $providers
 * @property MerchantConfiguration[]|null $configurations
 * @property MerchantConfiguration|null $configuration
 * @property Webhook[]|null $webhooks
 */
class Merchant extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "providers" => [Provider::class],
        "configurations" => [MerchantConfiguration::class],
        "configuration" => MerchantConfiguration::class,
        "webhooks" => [Webhook::class],
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
     * @return Provider[]|null
     */
    public function getProviders(): ?array
    {
        return $this->providers;
    }

    /**
     * @return MerchantConfiguration[]|null
     */
    public function getConfigurations(): ?array
    {
        return $this->configurations;
    }

    /**
     * @return MerchantConfiguration|null
     */
    public function getConfiguration(): ?MerchantConfiguration
    {
        return $this->configuration;
    }

    /**
     * @return Webhook[]|null
     */
    public function getWebhooks(): ?array
    {
        return $this->webhooks;
    }
}
