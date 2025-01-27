<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property CurrencyEnum|null $currency
 * @property LanguageEnum|null $language
 * @property CustomerInput|null $customer
 * @property SessionParcelInput[]|null $parcels
 * @property SessionPriceInput[]|null $price
 * @property SessionPickupPointInput|null $pickupPoint
 * @property SessionHomeDeliveryInput|null $homeDelivery
 */
class SessionInput extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "currency" => CurrencyEnum::class,
        "language" => LanguageEnum::class,
        "customer" => CustomerInput::class,
        "parcels" => [SessionParcelInput::class],
        "price" => [SessionPriceInput::class],
        "pickupPoint" => SessionPickupPointInput::class,
        "homeDelivery" => SessionHomeDeliveryInput::class,
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setId(?string $value): self
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param CurrencyEnum|null $value
     *
     * @return self
     */
    public function setCurrency(?CurrencyEnum $value): self
    {
        $this->currency = $value;

        return $this;
    }

    /**
     * @param LanguageEnum|null $value
     *
     * @return self
     */
    public function setLanguage(?LanguageEnum $value): self
    {
        $this->language = $value;

        return $this;
    }

    /**
     * @param CustomerInput|null $value
     *
     * @return self
     */
    public function setCustomer(?CustomerInput $value): self
    {
        $this->customer = $value;

        return $this;
    }

    /**
     * @param SessionParcelInput[]|null $value
     *
     * @return self
     */
    public function setParcels(?array $value): self
    {
        $this->parcels = $value;

        return $this;
    }

    /**
     * @param SessionPriceInput[]|null $value
     *
     * @return self
     */
    public function setPrice(?array $value): self
    {
        $this->price = $value;

        return $this;
    }

    /**
     * @param SessionPickupPointInput|null $value
     *
     * @return self
     */
    public function setPickupPoint(?SessionPickupPointInput $value): self
    {
        $this->pickupPoint = $value;

        return $this;
    }

    /**
     * @param SessionHomeDeliveryInput|null $value
     *
     * @return self
     */
    public function setHomeDelivery(?SessionHomeDeliveryInput $value): self
    {
        $this->homeDelivery = $value;

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
     * @return CurrencyEnum|null
     */
    public function getCurrency(): ?CurrencyEnum
    {
        return $this->currency;
    }

    /**
     * @return LanguageEnum|null
     */
    public function getLanguage(): ?LanguageEnum
    {
        return $this->language;
    }

    /**
     * @return CustomerInput|null
     */
    public function getCustomer(): ?CustomerInput
    {
        return $this->customer;
    }

    /**
     * @return SessionParcelInput[]|null
     */
    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    /**
     * @return SessionPriceInput[]|null
     */
    public function getPrice(): ?array
    {
        return $this->price;
    }

    /**
     * @return SessionPickupPointInput|null
     */
    public function getPickupPoint(): ?SessionPickupPointInput
    {
        return $this->pickupPoint;
    }

    /**
     * @return SessionHomeDeliveryInput|null
     */
    public function getHomeDelivery(): ?SessionHomeDeliveryInput
    {
        return $this->homeDelivery;
    }
}
