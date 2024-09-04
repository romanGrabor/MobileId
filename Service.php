<?php

namespace Eurostil\MobileIdSDK;

use Bitrix\Main\Web\HttpClient;

/**
 * Class Service.
 */
class Service
{
    private $httpClient;

    /**
     * Constructor.
     */
    public function __construct()
    {
        // временно отключаем проверку ssl, на нашем тестовом стенде его нет
        $this->httpClient = new HttpClient(['disableSslVerification' => true]);
    }

    /**
     * Проверяем, есть ли связь с сервисом Mobile Id.
     *
     * @return bool
     */
    public function checkHealth(): bool
    {
        $response = json_decode($this->httpClient->get(Settings::getMobileIdEndpoint() . 'health'), true);

        return (!empty($response) && $response['status'] === 'OK');
    }

    /**
     * Выполняет аутентификацию пользователя.
     *
     * @return bool
     */
    public function siAuthorizeRequest(): string
    {
        $params = [
            'client_id' => Settings::getClientId(),
            'response_type' => 'mc_si_async_code',
            'scope' => Settings::getScope(),
            'request' => Settings::getRequest()
        ];

        $response = $this->httpClient->post(
            Settings::getMobileIdEndpoint() . 'oidc/si-authorize',
            json_encode($params, JSON_THROW_ON_ERROR)
        );

        return $response;
    }
}
