<?php

namespace BigFish\DeliveryGateway;

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

    public function useWebhookHandler(string $name, callable $handler): self
    {
        $this->webhook->useHandler($name, $handler);

        return $this;
    }

    public function handleWebhook(): mixed
    {
        return $this->webhook->handle($this->config);
    }

    public function createSession(DTO\Session\Create $session)
    {
        return $this->graphql->createSession($this->config, $session);
    }
}
