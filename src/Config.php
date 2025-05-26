<?php

namespace BigFish\DeliveryGateway;

class Config
{
    protected const VERSION = '1.0.6';

    protected $merchantId;

    protected $accessToken;

    protected $webhookSignatureSecretKey;

    protected $sandbox;

    protected $apiUrl;

    protected $timeout;

    public function __construct(string $merchantId, string $accessToken)
    {
        $this->merchantId = $merchantId;
        $this->accessToken = $accessToken;
        $this->webhookSignatureSecretKey = null;
        $this->sandbox = false;
        $this->apiUrl = null;
        $this->timeout = 10;
    }

    public static function make(string $merchantId, string $accessToken): self
    {
        return new static($merchantId, $accessToken);
    }

    public function getVersion(): string
    {
        return static::VERSION;
    }

    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    public function useMerchantId(string $merchantId): self
    {
        $this->merchantId = $merchantId;

        return $this;
    }

    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    public function useAccessToken(string $accessToken): self
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    public function getWebhookSignatureSecretKey(): ?string
    {
        return $this->webhookSignatureSecretKey;
    }

    public function useWebhookSignatureSecretKey(?string $webhookSignatureSecretKey): self
    {
        $this->webhookSignatureSecretKey = $webhookSignatureSecretKey;

        return $this;
    }

    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    public function useSandbox(bool $sandbox = true): self
    {
        $this->sandbox = $sandbox;

        return $this;
    }

    public function useApiUrl(string $apiUrl): self
    {
        $this->apiUrl = $apiUrl;

        return $this;
    }

    public function getApiUrl(): string
    {
        if (!is_null($this->apiUrl)) {
            return $this->apiUrl;
        }

        $host = 'deliverygateway.io';

        if ($this->isSandbox()) {
            $host = 'sandbox.' . $host;
        }

        return 'https://api.' . $host;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function useTimeout(int $seconds): void
    {
        $this->timeout = $seconds;
    }
}
