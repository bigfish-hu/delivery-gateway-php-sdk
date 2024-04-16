<?php

namespace BigFish\DeliveryGateway\Enums;

/**
 * @method static static MPL()
 * @method static static GLS()
 * @method static static FOX_POST()
 * @method static static PACKETA()
 * @method static static SAME_DAY()
 * @method static static DPD()
 * @method static static SPRINTER()
 * @method static static EXPRESS_ONE()
 * @method static static DHL()
 * @method static static TNT()
 * @method static static FED_EX()
 * @method static static UPS()
 */
class ProviderEnum extends Enum
{
    public static function custom(string $id): self
    {
        return new static(sprintf('custom(%s)', $id));
    }

    protected function isValid(string $value): bool
    {
        if (preg_match('/custom\([^)]+\)/', $value)) {
            return true;
        }

        return parent::isValid($value);
    }
}
