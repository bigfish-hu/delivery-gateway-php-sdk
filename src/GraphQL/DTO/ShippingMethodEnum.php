<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static HOME_DELIVERY()
 * @method static static ONLINE()
 * @method static static PICKUP_POINT()
 * @method static static STORE()
 *
 * @method bool isHomeDelivery()
 * @method bool isOnline()
 * @method bool isPickupPoint()
 * @method bool isStore()
 */
class ShippingMethodEnum extends EnumType
{
}
