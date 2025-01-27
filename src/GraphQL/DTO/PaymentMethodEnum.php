<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static CARD()
 * @method static static CASH()
 *
 * @method bool isCard()
 * @method bool isCash()
 */
class PaymentMethodEnum extends EnumType
{
}
