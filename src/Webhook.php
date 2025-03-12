<?php

namespace BigFish\DeliveryGateway;

use BigFish\DeliveryGateway\Exception\WebhookException;
use BigFish\DeliveryGateway\Webhook\DTO;

class Webhook
{
    protected $handlers;

    public function __construct()
    {
        $this->handlers = [];
    }

    public function useHandler(string $name, callable $handler): self
    {
        $this->handlers[$name] = $handler;

        return $this;
    }

    protected function getHeader(string $name): ?string
    {
        if (is_array($_SERVER) && array_key_exists($name, $_SERVER)) {
            return $_SERVER[$name];
        }

        return null;
    }

    protected function getWebhookNameHeader(): ?string
    {
        return $this->getHeader('HTTP_X_WEBHOOK');
    }

    protected function getSignatureHeader(): ?string
    {
        return $this->getHeader('HTTP_X_WEBHOOK');
    }

    protected function getTimestampHeader(): ?string
    {
        return $this->getHeader('HTTP_X_TIMESTAMP');
    }

    protected function getPayload(): string
    {
        return file_get_contents('php://input');
    }

    protected function verifySignature(string $signature, string $secretKey, string $timestamp, string $payload): bool
    {
        return $signature === hash('sha256', $secretKey . $timestamp . $payload);
    }

    protected function getParsedPayload(string $payload): array
    {
        return json_decode($payload, true);
    }

    protected function guessDataTransferObjectClass(string $name): string
    {
        $basename = preg_replace_callback(
            '(:([a-z]))',
            static function ($value) {
                return ucfirst($value[1]);
            },
            ucfirst($name)
        );

        return 'BigFish\\DeliveryGateway\\Webhook\\DTO\\' . $basename;
    }

    protected function getDataTransferObjectClass(string $name): string
    {
        $class = $this->guessDataTransferObjectClass($name);

        if (class_exists($class)) {
            return $class;
        }

        return DTO::class;
    }

    public function handle(Config $config): mixed
    {
        $name = $this->getWebhookNameHeader();
        $signature = $this->getSignatureHeader();
        $timestamp = $this->getTimestampHeader();

        if (is_null($name)) {
            throw new WebhookException('Header webhook name cannot be resolved');
        }

        $payload = $this->getPayload();

        $secretKey = $config->getWebhookSignatureSecretKey();

        if (!is_null($secretKey)) {
            if (is_null($signature)) {
                throw new WebhookException('Header signature cannot be resolved');
            }

            if (is_null($timestamp)) {
                throw new WebhookException('Header timestamp cannot be resolved');
            }

            if (!$this->verifySignature($signature, $secretKey, $timestamp, $payload)) {
                throw new WebhookException('Signature is not valid');
            }
        }

        if (!array_key_exists($name, $this->handlers)) {
            return false;
        }

        $handler = $this->handlers[$name];
        $dto = $this->getDataTransferObjectClass($name);

        return $handler(new $dto($this->getParsedPayload($payload)));
    }
}
