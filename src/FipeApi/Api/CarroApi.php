<?php

namespace FipeApi\Api;

use FipeApi\AbstractApi;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class CarroApi
 *
 * @package FipeApi\Api
 */
class CarroApi extends AbstractApi
{

    /**
     * CarroApi constructor.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        parent::__construct(Tipo::CARROS, $client);
    }

}