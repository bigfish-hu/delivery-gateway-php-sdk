<?php

namespace BigFish\DeliveryGateway\GraphQL\DTO;

use BigFish\DeliveryGateway\GraphQL\EnumType;

/**
 * @method static static RECIPIENT_TO_SENDER()
 * @method static static SENDER_TO_RECIPIENT()
 * @method static static THIRD_PARTY_TO_THIRD_PARTY()
 *
 * @method bool isRecipientToSender()
 * @method bool isSenderToRecipient()
 * @method bool isThirdPartyToThirdParty()
 */
class ShipmentModeEnum extends EnumType
{
}
