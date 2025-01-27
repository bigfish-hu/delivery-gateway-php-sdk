<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static CANCELED()
 * @method static static COLLECTED()
 * @method static static COLLECTING()
 * @method static static CREATED()
 * @method static static DELIVERED()
 * @method static static DELIVERING()
 * @method static static ERROR()
 * @method static static FAILED()
 * @method static static IN_PROGRESS()
 * @method static static OTHER()
 * @method static static PROCESSING()
 * @method static static RECEIVABLE()
 * @method static static RETURNED()
 * @method static static RETURNING()
 * @method static static SUSPENDED()
 * @method static static UNKNOWN()
 *
 * @method bool isCanceled()
 * @method bool isCollected()
 * @method bool isCollecting()
 * @method bool isCreated()
 * @method bool isDelivered()
 * @method bool isDelivering()
 * @method bool isError()
 * @method bool isFailed()
 * @method bool isInProgress()
 * @method bool isOther()
 * @method bool isProcessing()
 * @method bool isReceivable()
 * @method bool isReturned()
 * @method bool isReturning()
 * @method bool isSuspended()
 * @method bool isUnknown()
 */
class ShipmentStatusEnum extends EnumType
{
}
