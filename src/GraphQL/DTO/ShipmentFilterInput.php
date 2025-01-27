<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string[]|null $id
 * @property ProviderEnum[]|null $provider
 * @property string|null $senderName
 * @property string|null $senderEmail
 * @property string|null $senderPhone
 * @property string|null $originPickupPointId
 * @property CountryEnum|null $originCountry
 * @property string|null $originState
 * @property string|null $originCity
 * @property string|null $originPostalCode
 * @property string|null $originAddressLine1
 * @property string|null $originAddressLine2
 * @property string|null $originNote
 * @property string|null $recipientName
 * @property string|null $recipientEmail
 * @property string|null $recipientPhone
 * @property string|null $destinationPickupPointId
 * @property CountryEnum|null $destinationCountry
 * @property string|null $destinationState
 * @property string|null $destinationCity
 * @property string|null $destinationPostalCode
 * @property string|null $destinationAddressLine1
 * @property string|null $destinationAddressLine2
 * @property string|null $destinationNote
 * @property string[]|null $trackingCode
 */
class ShipmentFilterInput extends ObjectType
{
    protected $casts = [
        "id" => ["string"],
        "provider" => [ProviderEnum::class],
        "senderName" => "string",
        "senderEmail" => "string",
        "senderPhone" => "string",
        "originPickupPointId" => "string",
        "originCountry" => CountryEnum::class,
        "originState" => "string",
        "originCity" => "string",
        "originPostalCode" => "string",
        "originAddressLine1" => "string",
        "originAddressLine2" => "string",
        "originNote" => "string",
        "recipientName" => "string",
        "recipientEmail" => "string",
        "recipientPhone" => "string",
        "destinationPickupPointId" => "string",
        "destinationCountry" => CountryEnum::class,
        "destinationState" => "string",
        "destinationCity" => "string",
        "destinationPostalCode" => "string",
        "destinationAddressLine1" => "string",
        "destinationAddressLine2" => "string",
        "destinationNote" => "string",
        "trackingCode" => ["string"],
    ];

    /**
     * @param string[]|null $value
     *
     * @return self
     */
    public function setId(?array $value): self
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @param ProviderEnum[]|null $value
     *
     * @return self
     */
    public function setProvider(?array $value): self
    {
        $this->provider = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setSenderName(?string $value): self
    {
        $this->senderName = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setSenderEmail(?string $value): self
    {
        $this->senderEmail = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setSenderPhone(?string $value): self
    {
        $this->senderPhone = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginPickupPointId(?string $value): self
    {
        $this->originPickupPointId = $value;

        return $this;
    }

    /**
     * @param CountryEnum|null $value
     *
     * @return self
     */
    public function setOriginCountry(?CountryEnum $value): self
    {
        $this->originCountry = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginState(?string $value): self
    {
        $this->originState = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginCity(?string $value): self
    {
        $this->originCity = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginPostalCode(?string $value): self
    {
        $this->originPostalCode = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginAddressLine1(?string $value): self
    {
        $this->originAddressLine1 = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginAddressLine2(?string $value): self
    {
        $this->originAddressLine2 = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setOriginNote(?string $value): self
    {
        $this->originNote = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setRecipientName(?string $value): self
    {
        $this->recipientName = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setRecipientEmail(?string $value): self
    {
        $this->recipientEmail = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setRecipientPhone(?string $value): self
    {
        $this->recipientPhone = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationPickupPointId(?string $value): self
    {
        $this->destinationPickupPointId = $value;

        return $this;
    }

    /**
     * @param CountryEnum|null $value
     *
     * @return self
     */
    public function setDestinationCountry(?CountryEnum $value): self
    {
        $this->destinationCountry = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationState(?string $value): self
    {
        $this->destinationState = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationCity(?string $value): self
    {
        $this->destinationCity = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationPostalCode(?string $value): self
    {
        $this->destinationPostalCode = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationAddressLine1(?string $value): self
    {
        $this->destinationAddressLine1 = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationAddressLine2(?string $value): self
    {
        $this->destinationAddressLine2 = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setDestinationNote(?string $value): self
    {
        $this->destinationNote = $value;

        return $this;
    }

    /**
     * @param string[]|null $value
     *
     * @return self
     */
    public function setTrackingCode(?array $value): self
    {
        $this->trackingCode = $value;

        return $this;
    }

    /**
     * @return string[]|null
     */
    public function getId(): ?array
    {
        return $this->id;
    }

    /**
     * @return ProviderEnum[]|null
     */
    public function getProvider(): ?array
    {
        return $this->provider;
    }

    /**
     * @return string|null
     */
    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    /**
     * @return string|null
     */
    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }

    /**
     * @return string|null
     */
    public function getSenderPhone(): ?string
    {
        return $this->senderPhone;
    }

    /**
     * @return string|null
     */
    public function getOriginPickupPointId(): ?string
    {
        return $this->originPickupPointId;
    }

    /**
     * @return CountryEnum|null
     */
    public function getOriginCountry(): ?CountryEnum
    {
        return $this->originCountry;
    }

    /**
     * @return string|null
     */
    public function getOriginState(): ?string
    {
        return $this->originState;
    }

    /**
     * @return string|null
     */
    public function getOriginCity(): ?string
    {
        return $this->originCity;
    }

    /**
     * @return string|null
     */
    public function getOriginPostalCode(): ?string
    {
        return $this->originPostalCode;
    }

    /**
     * @return string|null
     */
    public function getOriginAddressLine1(): ?string
    {
        return $this->originAddressLine1;
    }

    /**
     * @return string|null
     */
    public function getOriginAddressLine2(): ?string
    {
        return $this->originAddressLine2;
    }

    /**
     * @return string|null
     */
    public function getOriginNote(): ?string
    {
        return $this->originNote;
    }

    /**
     * @return string|null
     */
    public function getRecipientName(): ?string
    {
        return $this->recipientName;
    }

    /**
     * @return string|null
     */
    public function getRecipientEmail(): ?string
    {
        return $this->recipientEmail;
    }

    /**
     * @return string|null
     */
    public function getRecipientPhone(): ?string
    {
        return $this->recipientPhone;
    }

    /**
     * @return string|null
     */
    public function getDestinationPickupPointId(): ?string
    {
        return $this->destinationPickupPointId;
    }

    /**
     * @return CountryEnum|null
     */
    public function getDestinationCountry(): ?CountryEnum
    {
        return $this->destinationCountry;
    }

    /**
     * @return string|null
     */
    public function getDestinationState(): ?string
    {
        return $this->destinationState;
    }

    /**
     * @return string|null
     */
    public function getDestinationCity(): ?string
    {
        return $this->destinationCity;
    }

    /**
     * @return string|null
     */
    public function getDestinationPostalCode(): ?string
    {
        return $this->destinationPostalCode;
    }

    /**
     * @return string|null
     */
    public function getDestinationAddressLine1(): ?string
    {
        return $this->destinationAddressLine1;
    }

    /**
     * @return string|null
     */
    public function getDestinationAddressLine2(): ?string
    {
        return $this->destinationAddressLine2;
    }

    /**
     * @return string|null
     */
    public function getDestinationNote(): ?string
    {
        return $this->destinationNote;
    }

    /**
     * @return string[]|null
     */
    public function getTrackingCode(): ?array
    {
        return $this->trackingCode;
    }
}
