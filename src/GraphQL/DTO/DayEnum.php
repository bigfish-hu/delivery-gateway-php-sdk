<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static FRIDAY()
 * @method static static MONDAY()
 * @method static static SATURDAY()
 * @method static static SUNDAY()
 * @method static static THURSDAY()
 * @method static static TUESDAY()
 * @method static static WEDNESDAY()
 *
 * @method bool isFriday()
 * @method bool isMonday()
 * @method bool isSaturday()
 * @method bool isSunday()
 * @method bool isThursday()
 * @method bool isTuesday()
 * @method bool isWednesday()
 */
class DayEnum extends EnumType
{
}
