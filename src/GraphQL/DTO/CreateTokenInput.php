<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\ObjectType;

/**
 * @property string|null $name
 * @property RoleEnum[]|null $roles
 * @property TokenAllowlistInput|null $allowlist
 */
class CreateTokenInput extends ObjectType
{
    protected $casts = [
        "name" => "string",
        "roles" => [RoleEnum::class],
        "allowlist" => TokenAllowlistInput::class,
    ];

    /**
     * @param string $value
     *
     * @return self
     */
    public function setName(string $value): self
    {
        $this->name = $value;

        return $this;
    }

    /**
     * @param RoleEnum[]|null $value
     *
     * @return self
     */
    public function setRoles(?array $value): self
    {
        $this->roles = $value;

        return $this;
    }

    /**
     * @param TokenAllowlistInput|null $value
     *
     * @return self
     */
    public function setAllowlist(?TokenAllowlistInput $value): self
    {
        $this->allowlist = $value;

        return $this;
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
     * @return TokenAllowlistInput|null
     */
    public function getAllowlist(): ?TokenAllowlistInput
    {
        return $this->allowlist;
    }
}
