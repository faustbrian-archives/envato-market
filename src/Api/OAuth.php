<?php

/*
 * This file is part of Envato Market PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Dribbble\Api;

use BrianFaust\Unified\AbstractApi;
use GuzzleHttp\Client as GuzzleClient;

class OAuth extends AbstractApi
{
    private $authorizeUrl = 'https://api.envato.com/authorization';

    private $accessTokenUrl = 'https://api.envato.com/token';

    public function authorize($redirect_uri = null, $scope = null, $state = null)
    {
        $parameters = [
            'response_type' => 'code',
            'client_id' => $this->client->clientId,
            'redirect_uri' => $redirect_uri,
        ];

        return urldecode($this->authorizeUrl.'?'.http_build_query($parameters));
    }

    public function accessToken($code, $redirect_uri = null)
    {
        $parameters = [
            'client_id' => $this->client->clientId,
            'client_secret' => $this->client->clientSecret,
            'code' => $code,
            'redirect_uri' => $redirect_uri,
        ];

        $httpClient = new GuzzleClient([
            'defaults' => [
                'headers' => $this->client->headers,
            ],
        ]);

        $response = $httpClient->post($this->accessTokenUrl, [
            'form_params' => array_filter($parameters),
        ]);

        return json_decode($response->getBody());
    }
}
