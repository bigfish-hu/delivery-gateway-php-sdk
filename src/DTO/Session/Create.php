<?php

namespace BigFish\DeliveryGateway\DTO\Session;

use BigFish\DeliveryGateway\DTO\DTO;
use BigFish\DeliveryGateway\DTO\Session\Create\Customer;
use BigFish\DeliveryGateway\DTO\Session\Create\HomeDelivery;
use BigFish\DeliveryGateway\DTO\Session\Create\Parcel;
use BigFish\DeliveryGateway\DTO\Session\Create\PickupPoint;
use BigFish\DeliveryGateway\DTO\Session\Create\Price;
use BigFish\DeliveryGateway\Enums\CurrencyEnum;
use BigFish\DeliveryGateway\Enums\LanguageEnum;

/**
 * @property string|null $id
 * @property CurrencyEnum|null $currency
 * @property LanguageEnum|null $language
 * @property Customer|null $customer
 * @property Parcel[]|null $parcels
 * @property Price[]|null $price
 * @property PickupPoint|null $pickupPoint
 * @property HomeDelivery|null $homeDelivery
 */
class Create extends DTO
{
    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCurrency(): ?CurrencyEnum
    {
        return $this->currency;
    }

    public function setCurrency(?CurrencyEnum $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getLanguage(): ?LanguageEnum
    {
        return $this->language;
    }

    public function setLanguage(?LanguageEnum $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    public function setCustomer(?Customer $customer): self
    {
        $this->customer = $customer;

        return $this;
    }

    public function getParcels(): ?array
    {
        return $this->parcels;
    }

    public function setParcels(?array $parcels): self
    {
        $this->parcels = $parcels;

        return $this;
    }

    public function getPrice(): ?array
    {
        return $this->price;
    }

    public function setPrice(?array $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPickupPoint(): ?PickupPoint
    {
        return $this->pickupPoint;
    }

    public function setPickupPoint(?PickupPoint $pickupPoint): self
    {
        $this->pickupPoint = $pickupPoint;

        return $this;
    }

    public function getHomeDelivery(): ?HomeDelivery
    {
        return $this->homeDelivery;
    }

    public function setHomeDelivery(?HomeDelivery $homeDelivery): self
    {
        $this->homeDelivery = $homeDelivery;

        return $this;
    }
}
