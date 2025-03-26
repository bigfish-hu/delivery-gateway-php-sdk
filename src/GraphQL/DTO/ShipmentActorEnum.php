<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static PROVIDER()
 * @method static static RECIPIENT()
 * @method static static SENDER()
 * @method static static UNKNOWN()
 *
 * @method bool isProvider()
 * @method bool isRecipient()
 * @method bool isSender()
 * @method bool isUnknown()
 */
class ShipmentActorEnum extends EnumType
{
}
