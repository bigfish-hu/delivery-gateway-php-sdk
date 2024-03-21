<?php

namespace BigFish\DeliveryGateway\DTO;

use BigFish\DeliveryGateway\Enums\LanguageEnum;

/**
 * @property string $firstName
 * @property string $lastName
 * @property LanguageEnum $language
 * @property string|null $email
 * @property string|null $phone
 */
class Recipient extends DTO
{
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getLanguage(): LanguageEnum
    {
        return $this->language;
    }

    public function setLanguage(LanguageEnum $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }
}
