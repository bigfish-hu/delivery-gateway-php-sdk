<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static CANCELED_BY_RECIPIENT()
 * @method static static CANCELED_BY_SENDER()
 * @method static static OBLITERATED()
 * @method static static RECEIVED()
 * @method static static UNDELIVERABLE()
 *
 * @method bool isCanceledByRecipient()
 * @method bool isCanceledBySender()
 * @method bool isObliterated()
 * @method bool isReceived()
 * @method bool isUndeliverable()
 */
class ShipmentResolutionEnum extends EnumType
{
}
