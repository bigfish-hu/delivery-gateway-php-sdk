<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static PAID()
 * @method static static PENDING()
 *
 * @method bool isPaid()
 * @method bool isPending()
 */
class PaymentStatusEnum extends EnumType
{
}
