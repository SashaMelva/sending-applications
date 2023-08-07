<?php

namespace App\Services\Api;

use AmoCRM\Client\AmoCRMApiClient;
use AmoCRM\Exceptions\AmoCRMApiException;
use AmoCRM\Exceptions\AmoCRMMissedTokenException;
use AmoCRM\Exceptions\AmoCRMoAuthApiException;
use AmoCRM\Models\LeadModel;

class ForApiAutoCrm
{
    private AmoCRMApiClient $apiClient;

    public function electrification($subdomain, $clientSecret, $clientId, $code): void
    {
        $apiClientSetting = (new ApiSettings())->getApiSetting($clientId,  $clientSecret);
        $this->apiClient = $apiClientSetting;
        var_dump($apiClientSetting);
        header("Location: /lead");
    }

    /**
     * @throws AmoCRMApiException
     * @throws AmoCRMoAuthApiException
     * @throws AmoCRMMissedTokenException
     */
    public function createLead(string $name, string $email, string $phone, int $price)
    {
        $lead = (new LeadModel())->setName('Сделка c' . $name)->setPrice($price);
        $response = $this->apiClient->leads()->addOne($lead);

        if ($response === false) {
            return array(
                'state' => 'error',
                'data' => 'Не удалось создать сделку',
            );
        }

        var_dump(array('state' => 'success', 'data' => 'Создана новая сделка под номером ' . $response->getId()));
        return array('state' => 'success', 'data' => 'Создана новая сделка под номером ' . $response->getId());
    }
}