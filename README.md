# Delivery Gateway PHP SDK

# Installation

```shell
composer require bigfish/delivery-gateway-php-sdk
```

# Examples

```php
// Using predefined variables $currency, $user and $address.

$client = Client::make(
    Config::make('<MERCHANT-ID>', '<ACCESS-TOKEN>')
        ->useSandbox()
);

$input = DTO\Session\Create::make()
    ->setCurrency(Enums\CurrencyEnum::make($currency))
    ->setCustomer(
        DTO\Session\Create\Customer::make()
            ->setReferenceId($user->id)
            ->setAddresses([
                DTO\Session\Create\Address::make()
                    ->setReferenceId($address->id)
                    ->setRecipient(
                        DTO\Recipient::make()
                            ->setFirstName($user->firstName)
                            ->setLastName($user->lastName)
                            ->setLanguage(Enums\LanguageEnum::make($user->language))
                    )
                    ->setAddress(
                        DTO\Address::make()
                            ->setCountry(Enums\CountryEnum::make($address->country))
                            ->setPostalCode($address->postalCode)
                            ->setCity($address->city)
                            ->setAddressLine1($address->addressLine1)
                    )
            ])
    )
    ->setPickupPoint(
        DTO\Session\Create\PickupPoint::make()
            ->setEnabled(true)
            ->setProviders([
                DTO\Session\Create\PickupPoint\Provider::make()
                    ->setProvider(Enums\ProviderEnum::make('GLS')),
            ])
    );

$session = $client->createSession($input);

// Pass $session->id to frontend SDK.
```
