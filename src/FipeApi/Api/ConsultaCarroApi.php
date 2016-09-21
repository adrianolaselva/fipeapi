<?php

namespace FipeApi\Api;

use FipeApi\AbstractConsultaApi;
use FipeApi\Constants\Tipo;
use FipeApi\Client;

/**
 * Class ConsultaCarroApi
 *
 * @package FipeApi\Api
 */
class ConsultaCarroApi extends AbstractConsultaApi
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