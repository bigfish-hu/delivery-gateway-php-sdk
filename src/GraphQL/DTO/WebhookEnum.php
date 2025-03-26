<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static ADDRESS_CREATED()
 * @method static static ADDRESS_DELETED()
 * @method static static ADDRESS_UPDATED()
 * @method static static CONFIGURATION_UPDATED()
 * @method static static SHIPMENT_CREATED()
 * @method static static SHIPMENT_DELETED()
 * @method static static SHIPMENT_UPDATED()
 *
 * @method bool isAddressCreated()
 * @method bool isAddressDeleted()
 * @method bool isAddressUpdated()
 * @method bool isConfigurationUpdated()
 * @method bool isShipmentCreated()
 * @method bool isShipmentDeleted()
 * @method bool isShipmentUpdated()
 */
class WebhookEnum extends EnumType
{
}
