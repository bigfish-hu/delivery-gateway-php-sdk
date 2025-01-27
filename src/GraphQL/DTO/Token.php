<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $id
 * @property string|null $name
 * @property RoleEnum[]|null $roles
 * @property TokenAllowlist|null $allowlist
 */
class Token extends ObjectType
{
    protected $casts = [
        "id" => "string",
        "name" => "string",
        "roles" => [RoleEnum::class],
        "allowlist" => TokenAllowlist::class,
    ];

    /**
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return RoleEnum[]|null
     */
    public function getRoles(): ?array
    {
        return $this->roles;
    }

    /**
     * @return TokenAllowlist|null
     */
    public function getAllowlist(): ?TokenAllowlist
    {
        return $this->allowlist;
    }
}
