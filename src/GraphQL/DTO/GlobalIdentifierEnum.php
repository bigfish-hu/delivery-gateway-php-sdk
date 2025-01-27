<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static EAN()
 * @method static static GTIN()
 * @method static static ISBN()
 * @method static static JAN()
 * @method static static MPN()
 * @method static static NIQ()
 * @method static static OTHER()
 * @method static static UPC()
 *
 * @method bool isEan()
 * @method bool isGtin()
 * @method bool isIsbn()
 * @method bool isJan()
 * @method bool isMpn()
 * @method bool isNiq()
 * @method bool isOther()
 * @method bool isUpc()
 */
class GlobalIdentifierEnum extends EnumType
{
}
