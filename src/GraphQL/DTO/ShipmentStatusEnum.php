<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static DELIVERED()
 * @method static static DELIVERING()
 * @method static static FAILED()
 * @method static static FAILING()
 * @method static static IN_PROGRESS()
 * @method static static RECEIVABLE()
 * @method static static WAITING_FOR_COLLECTION()
 *
 * @method bool isDelivered()
 * @method bool isDelivering()
 * @method bool isFailed()
 * @method bool isFailing()
 * @method bool isInProgress()
 * @method bool isReceivable()
 * @method bool isWaitingForCollection()
 */
class ShipmentStatusEnum extends EnumType
{
}
