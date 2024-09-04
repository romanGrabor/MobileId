<?php

namespace Eurostil\MobileIdSDK;

use Bitrix\Main\Web\JWT;

/**
 * Настройки для работы с сервисом Mobile Id.
 */
class Settings
{
    /**
     * Возвращает значение client_id.
     *
     * @return string
     */
    public static function getClientId(): string
    {
        return Config::CLIENT_ID;
    }

    /**
     * Возвращает значение response_type.
     *
     * @return string
     */
    public static function getResponseType(): string
    {
        return Config::RESPONSE_TYPE;
    }

    /**
     * Возвращает url сервиса Mobile Id.
     *
     * @return string
     */
    public static function getMobileIdEndpoint(): string
    {
        return Config::MOBILE_ID_ENDPOINT;
    }

    /**
     * Возвращает значение scope.
     *
     * @return string
     */
    public static function getScope(): string
    {
        return Config::SCOPE;
    }

    /**
     * Возвращает значение private key.
     *
     * @return string
     */
    public static function getPrivateKey(): string
    {
        return Config::PRIVATE_KEY;
    }

    /**
     * Возвращает значение request.
     *
     * @return string
     */
    public static function getRequest(): string
    {
        $header = [
            'alg' => 'RS256',
            'typ' => 'JWT',
            'kid' => 'rsa1',
        ];

        $claims = [
            'iss' => self::getClientId(),
            'response_type' => self::getResponseType(),
            'client_id' => self::getClientId(),
            'scope' => self::getScope(),
            'version' => 'mc_si_r2_v1.0',
            'nonce' => self::generateUuid4(),
            'login_hint' => 'ENCR_MSISDN:RlwdG...VkIE1ETg',
            'acr_values' => '2',
            'correlation_id' => self::generateUuid4(),
            'client_notification_token' => self::generateUuid4(),
            'aud' => 'https://idgw.mobileid.mts.ru',
            // endpoint со стороны магазина пока не сделан
            'notification_uri' => 'https://' . $_SERVER['HTTP_HOST'] . '/notification_uri',
        ];

        return JWT::encode($claims, self::getPrivateKey(), 'RS256', $header);
    }

    /**
     * Мы не можем использовать библиотеку ramsey/uuid, поэтому uuid4 генерируем сами.
     *
     * @return string
     */
    private static function generateUuid4()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            random_int(0, 0xffff),
            random_int(0, 0xffff),
            random_int(0, 0xffff),
            // устанавливаем версию 4
            random_int(0, 0x0fff) | 0x4000,
            // устанавливаем вариант 1 (из стандарта RFC 4122)
            random_int(0, 0x3fff) | 0x8000,
            random_int(0, 0xffff),
            random_int(0, 0xffff),
            random_int(0, 0xffff)
        );
    }
}
