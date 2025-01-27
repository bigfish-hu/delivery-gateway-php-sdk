<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static AVG()
 * @method static static MIN()
 * @method static static MAX()
 * @method static static SUM()
 * @method static static COUNT()
 *
 * @method bool isAvg()
 * @method bool isMin()
 * @method bool isMax()
 * @method bool isSum()
 * @method bool isCount()
 */
class OrderByRelationWithColumnAggregateFunction extends EnumType
{
}
