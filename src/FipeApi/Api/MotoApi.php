<?php

namespace FipeApi\Api;

use FipeApi\AbstractApi;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class MotoApi
 *
 * @package FipeApi\Api
 */
class MotoApi extends AbstractApi
{

    /**
     * MotoApi constructor.
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        parent::__construct(Tipo::MOTOS, $client);
    }
}