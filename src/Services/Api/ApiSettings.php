<?php

namespace App\Services\Api;

use AmoCRM\Client\AmoCRMApiClient;
use League\OAuth2\Client\Token\AccessTokenInterface;

class ApiSettings
{
    public function getApiSetting(string $clientId, string $clientSecret): AmoCRMApiClient
    {
        $accessToken = getToken();
        $apiClient = new AmoCRMApiClient($clientId, $clientSecret, '');
        $apiClient->setAccessToken($accessToken)
            ->setAccountBaseDomain($accessToken->getValues()['baseDomain'])
            ->onAccessTokenRefresh(
                function (AccessTokenInterface $accessToken, string $baseDomain) {
                    saveToken(
                        [
                            'accessToken' => $accessToken->getToken(),
                            'refreshToken' => $accessToken->getRefreshToken(),
                            'expires' => $accessToken->getExpires(),
                            'baseDomain' => $baseDomain,
                        ]
                    );
                });

        return $apiClient;
    }
}