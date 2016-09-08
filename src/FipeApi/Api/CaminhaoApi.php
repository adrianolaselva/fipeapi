<?php

namespace FipeApi\Api;

use FipeApi\AbstractApi;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class CaminhaoApi
 *
 * @package FipeApi\Api
 */
class CaminhaoApi extends AbstractApi
{

    /**
     * CaminhaoApi constructor.
     *
     * @param Client|null $client
     */
    public function __construct(Client $client = null)
    {
        parent::__construct(Tipo::CAMINHOES, $client);
    }

}