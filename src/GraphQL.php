<?php

namespace BigFish\DeliveryGateway;

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
            throw new GraphQLException('Something went wrong during GraphQL communication');
        }

        return $response;
    }

    public function createSession(Config $config, DTO\Session\Create $session): DTO\Session\Session
    {

        $response = $this->execute(
            $config,
            /** @lang GraphQL */ <<<gql
                mutation (\$input: SessionInput!) {
                    session(input: \$input) {
                        id
                    }
                }
            gql,
            [
                'input' => $session->toArray(),
            ]
        );

        $session = $response['data']['session'] ?? null;

        if (is_null($session)) {
            throw new SessionException('Session could not be initialized');
        }

        return DTO\Session\Session::make($session);
    }
}
