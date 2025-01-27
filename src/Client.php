<?php

namespace BigFish\DeliveryGateway;

use BigFish\DeliveryGateway\GraphQL\DTO;

class Client
{
    protected $config;

    protected $webhook;

    protected $graphql;

    public function __construct(Config $config)
    {
        $this->config = $config;
        $this->webhook = new Webhook();
        $this->graphql = new GraphQL();
    }

    public static function make(Config $config): self
    {
        return new static($config);
    }

    public function getConfig(): Config
    {
        return $this->config;
    }

    public function useConfig(Config $config): self
    {
        $this->config = $config;

        return $this;
    }

    public function useGraphQL(GraphQL $graphql): self
    {
        $this->graphql = $graphql;

        return $this;
    }

    public function useWebhookHandler(string $name, callable $handler): self
    {
        $this->webhook->useHandler($name, $handler);

        return $this;
    }

    public function handleWebhook(): mixed
    {
        return $this->webhook->handle($this->config);
    }

    public function createSession(DTO\SessionInput $session): DTO\Session
    {
        return $this->graphql->createSession($this->config, $session);
    }

    public function getProviders(): array
    {
        return $this->graphql->getProviders($this->config);
    }

    public function getPickupPoints(DTO\PickupPointFilterInput $filter): array
    {
        return $this->graphql->getPickupPoints($this->config, $filter);
    }

    public function getPickupPoint(string $id): ?DTO\PickupPoint
    {
        return $this->graphql->getPickupPoint($this->config, $id);
    }

    public function getMerchant(): DTO\Merchant
    {
        return $this->graphql->getMerchant($this->config);
    }

    public function createShipment(DTO\CreateShipmentInput $shipment): DTO\Shipment
    {
        return $this->graphql->createShipment($this->config, $shipment);
    }

    public function upsertOrder(DTO\OrderInput $order)
    {
        $this->graphql->upsertOrder($this->config, $order);
    }
}
