<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static AUTHORIZED()
 * @method static static PAID()
 * @method static static PARTIALLY_RAID()
 * @method static static PARTIALLY_REFUNDED()
 * @method static static PENDING()
 * @method static static REFUNDED()
 * @method static static VOIDED()
 *
 * @method bool isAuthorized()
 * @method bool isPaid()
 * @method bool isPartiallyRaid()
 * @method bool isPartiallyRefunded()
 * @method bool isPending()
 * @method bool isRefunded()
 * @method bool isVoided()
 */
class PaymentStatusEnum extends EnumType
{
}
