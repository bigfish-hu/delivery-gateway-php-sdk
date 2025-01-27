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
```
