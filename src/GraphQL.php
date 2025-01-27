<?php

namespace BigFish\DeliveryGateway;

use BigFish\DeliveryGateway\GraphQL\DTO;
use BigFish\DeliveryGateway\Exception\GraphQLException;
use BigFish\DeliveryGateway\Exception\SessionException;

class GraphQL
{
    protected function execute(Config $config, string $query, ?array $variables = null): array
    {
        $response = @file_get_contents(
            rtrim($config->getApiUrl(), '/') . '/graphql/merchant',
            false,
            stream_context_create([
                'http' => [
                    'method' => 'POST',
                    'header' => [
                        'Content-Type: application/json',
                        'Authorization: Bearer ' . $config->getAccessToken(),
                        sprintf('X-Client: OS/%s; PHP/%s; SDK/%s', PHP_OS, PHP_VERSION, $config->getVersion()),
                    ],
                    'content' => json_encode(['query' => $query, 'variables' => $variables]),
                    'timeout' => $config->getTimeout(),
                ],
            ]));

        if ($response === false) {
            throw new GraphQLException('GraphQL communication failed');
        }

        $response = @json_decode($response, true);

        if (!is_array($response)) {
            throw new GraphQLException('Could not parse GraphQL response');
        }

        if (!empty($response['errors'])) {
            throw new GraphQLException('Something went wrong during GraphQL communication', $response['errors']);
        }

        return $response;
    }

    public function createSession(Config $config, DTO\SessionInput $session): DTO\Session
    {
        $gql = /** @lang GraphQL */ <<<gql
            mutation (\$input: SessionInput!) {
                session(input: \$input) {
                    id
                }
            }
gql;

        $response = $this->execute($config, $gql, ['input' => $session->toArray()]);

        $session = $response['data']['session'] ?? null;

        if (is_null($session)) {
            throw new SessionException('Session could not be initialized');
        }

        return DTO\Session::make($session);
    }

    public function getProviders(Config $config): array
    {
        $gql = /** @lang GraphQL */ <<<gql
            query {
                providers {
                    id
                    name
                    icon
                    isEnabled
                    isAvailable
                }
            }
gql;

        $response = $this->execute($config, $gql);

        return DTO\Provider::collect($response['data']['providers'] ?? []);
    }

    public function getPickupPoints(Config $config, DTO\PickupPointFilterInput $filter): array
    {
        $gql = /** @lang GraphQL */ <<<gql
            query (\$filters: PickupPointFilterInput, \$sortBy: PickupPointSortInput, \$first: Int!, \$page: Int) {
                pickupPoints(filters: \$filters, sortBy: \$sortBy, first: \$first, page: \$page) {
                    data {
                        id
                        name
                        address {
                            country
                            state
                            city
                            postalCode
                            addressLine1
                            addressLine2
                            note
                        }
                    }
                }
            }
gql;

        $response = $this->execute(
            $config,
            $gql,
            [
                'filters' => $filter->toArray(),
                'sortBy' => [
                    'field' => 'NAME',
                    'direction' => 'ASC',
                ],
                'first' => 10,
                'page' => 0,
            ]
        );

        return DTO\PickupPoint::collect($response['data']['pickupPoints']['data'] ?? []);
    }

    public function getPickupPoint(Config $config, string $id): ?DTO\PickupPoint
    {
        $gql = /** @lang GraphQL */ <<<gql
            query (\$id: ID!) {
                pickupPoint(id: \$id) {
                    id
                    name
                    provider
                    address {
                        country
                        state
                        city
                        postalCode
                        addressLine1
                        addressLine2
                        note
                    }
                }
            }
gql;

        $response = $this->execute($config, $gql, ['id' => $id]);

        $pickupPoint = $response['data']['pickupPoint'] ?? null;

        if (is_null($pickupPoint)) {
            return null;
        }

        return DTO\PickupPoint::make($pickupPoint);
    }

    public function getMerchant(Config $config): DTO\Merchant
    {
        $gql = /** @lang GraphQL */ <<<gql
            query {
                me {
                    id
                    name
                    configurations {
                        key
                        value
                    }
                }
            }
gql;

        $response = $this->execute($config, $gql);

        return DTO\Merchant::make($response['data']['me']);
    }

    public function createShipment(Config $config, DTO\CreateShipmentInput $shipment): DTO\Shipment
    {
        $gql = /** @lang GraphQL */ <<<gql
            mutation (\$input: CreateShipmentInput!) {
                createShipment(input: \$input) {
                    id
                    # referenceId
                    parcels {
                        referenceId
                        tracking {
                            code
                            url
                        }
                        label {
                            url
                        }
                    }
                }
            }
gql;

        $response = $this->execute($config, $gql, ['input' => $shipment->toArray()]);

        return DTO\Shipment::make($response['data']['createShipment']);
    }

    public function upsertOrder(Config $config, DTO\OrderInput $order)
    {
        $gql = /** @lang GraphQL */ <<<gql
            mutation (\$input: OrderInput!) {
                upsertOrder(input: \$input)
            }
gql;

        $this->execute($config, $gql, ['input' => $order->toArray()]);
    }
}
