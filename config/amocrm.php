<?php

/*
 * This file is part of Laravel AmoCrm.
 *
 * (c) dotzero <mail@dotzero.ru>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Авторизация в системе amoCRM
    |--------------------------------------------------------------------------
    |
    | Эти параметры необходимы для авторизации в системе amoCRM.
    | - Домен компании (включая .amocrm.ru). Например, example.amocrm.ru;
    | - Параметр "состояния". "Сгенерированный вами строковый параметр, возможно хеш.
    |   State нужен для того, чтобы при получении ответа от amoCRM, вы могли проверить его достоверность,
    |   сравнив отправленный ключ и полученный в результате, чтобы удостовериться в отсутствии подмены CSRF
    | - ID интеграции.
    | - Секрет интеграции. Получить можно следуя инструкцие на странице
    | - Код авторизации (действителен 20 минут). Необходим единоразово для первоначальной настройки
    | - Redirect URI указанный в настройках интеграции
    |   https://www.amocrm.ru/developers/content/oauth/easy-auth
    |   https://www.amocrm.ru/developers/content/oauth/step-by-step#request-authorization-code
    |   Архив:
    |   https://web.archive.org/web/20191030063225/https://www.amocrm.ru/developers/content/oauth/easy-auth
    |   https://web.archive.org/web/20191030064552/https://www.amocrm.ru/developers/content/oauth/step-by-step#get_auth_code
    */

    'domain' => env('AMO_DOMAIN', 'example.amocrm.ru'),
    'state' => env('AMO_STATE', (string) rand(10000,PHP_INT_MAX)),
    'clientId' => env('AMO_CLIENT_ID', 'TODO CHANGE'),
    'clientSecret' => env('AMO_CLIENT_SECRET', 'TODO CHANGE'),
    'clientAuthorizationCode' => env('AMO_CLIENT_AUTHORIZATION_CODE', 'TODO CHANGE'),
    'redirectUri' => env('AMO_REDIRECT_URI', 'about:blank?'),

    'tokensFilePath' => storage_path('vendor/dotzero/laravel-amocrm/tokens.dat'),

    /*
    |--------------------------------------------------------------------------
    | Авторизация в системе B2B Family
    |--------------------------------------------------------------------------
    |
    | Эти параметры авторизации необходимо указать если будет использована
    | отправка писем с привязкой к сделке в amoCRM, через сервис B2B Family.
    |
    */

    'b2bfamily' => [

        'appkey' => env('B2B_APPKEY'),
        'secret' => env('B2B_SECRET'),
        'email' => env('B2B_EMAIL'),
        'password' => env('B2B_PASSWORD'),

    ]

];
