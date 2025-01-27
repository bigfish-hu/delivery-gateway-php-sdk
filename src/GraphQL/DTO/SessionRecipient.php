<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $firstName
 * @property string|null $lastName
 * @property string|null $name
 * @property LanguageEnum|null $language
 * @property string|null $email
 * @property string|null $phone
 */
class SessionRecipient extends ObjectType
{
    protected $casts = [
        "firstName" => "string",
        "lastName" => "string",
        "name" => "string",
        "language" => LanguageEnum::class,
        "email" => "string",
        "phone" => "string",
    ];

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
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
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
