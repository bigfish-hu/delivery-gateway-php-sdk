<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $firstName
 * @property string|null $lastName
 * @property LanguageEnum|null $language
 * @property string|null $email
 * @property string|null $phone
 */
class CustomerRecipientInput extends ObjectType
{
    protected $casts = [
        "firstName" => "string",
        "lastName" => "string",
        "language" => LanguageEnum::class,
        "email" => "string",
        "phone" => "string",
    ];

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setFirstName(?string $value): self
    {
        $this->firstName = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setLastName(?string $value): self
    {
        $this->lastName = $value;

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
     * @param string|null $value
     *
     * @return self
     */
    public function setEmail(?string $value): self
    {
        $this->email = $value;

        return $this;
    }

    /**
     * @param string|null $value
     *
     * @return self
     */
    public function setPhone(?string $value): self
    {
        $this->phone = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @return LanguageEnum|null
     */
    public function getLanguage(): ?LanguageEnum
    {
        return $this->language;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
}
